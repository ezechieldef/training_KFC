<?php

namespace App\Http\Controllers;

use App\Models\Manager;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\ManagerRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class ManagerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $managers = Manager::paginate();

        return view('manager.index', compact('managers'))
            ->with('i', ($request->input('page', 1) - 1) * $managers->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $manager = new Manager();

        return view('manager.create', compact('manager'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ManagerRequest $request): RedirectResponse
    {
        Manager::create($request->validated());

        return Redirect::route('managers.index')
            ->with('success', 'Manager created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $manager = Manager::find($id);

        return view('manager.show', compact('manager'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $manager = Manager::find($id);

        return view('manager.edit', compact('manager'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ManagerRequest $request, Manager $manager): RedirectResponse
    {
        $manager->update($request->validated());

        return Redirect::route('managers.index')
            ->with('success', 'Manager updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        Manager::find($id)->delete();

        return Redirect::route('managers.index')
            ->with('success', 'Manager deleted successfully');
    }
}
