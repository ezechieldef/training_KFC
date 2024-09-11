<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use App\Models\Entreprise;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\EntrepriseRequest;
use App\Models\Manager;
use Illuminate\Support\Facades\Redirect;

class EntrepriseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $entreprises = Entreprise::paginate();

        return view('entreprise.index', compact('entreprises'))
            ->with('i', ($request->input('page', 1) - 1) * $entreprises->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $entreprise = new Entreprise();

        return view('entreprise.create', compact('entreprise'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(EntrepriseRequest $request): RedirectResponse
    {
        $all = $request->validated();

        if ($request->hasFile('logo')) {
            $all['logo'] = Storage::url($request->file('logo')->store('logos'));
        }
        Entreprise::create($all);

        return Redirect::route('entreprises.index')
            ->with('success', 'Entreprise created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $entreprise = Entreprise::find($id);
        $managers = Manager::pluck('nom', 'id');
        return view('entreprise.show', compact('entreprise', 'managers'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $entreprise = Entreprise::find($id);

        return view('entreprise.edit', compact('entreprise'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(EntrepriseRequest $request, Entreprise $entreprise): RedirectResponse
    {

        $all = $request->validated();

        if ($request->hasFile('logo')) {
            $all['logo'] = Storage::url($request->file('logo')->store('public/logos'));
        }

        $entreprise->update($request->validated());

        return Redirect::route('entreprises.index')
            ->with('success', 'Entreprise updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        Entreprise::find($id)->delete();

        return Redirect::route('entreprises.index')
            ->with('success', 'Entreprise deleted successfully');
    }
}
