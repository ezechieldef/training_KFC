@extends('layouts.app')

@section('template_title')
    Entreprises
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">

                                <h5 class="card-title fw-semibold mb-4">Liste des {{ __('Entreprises') }}</h5>
                            </span>

                        </div>
                        <div class="d-flex justify-content-end">
                            <a href="{{ route('entreprises.create') }}" class="btn btn-primary btn-sm float-right"
                                data-placement="left">
                                Nouveau
                            </a>
                        </div>

                        @if ($message = Session::get('success'))
                            <div class="alert alert-success m-4">
                                <p>{{ $message }}</p>
                            </div>
                        @endif


                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>

                                        <th>Raison Social</th>
                                        <th>Ifu</th>
                                        <th>Pays</th>


                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($entreprises as $entreprise)
                                        <tr>
                                            <td>
                                                <img src="{{ asset($entreprise->logo) }}" width="50" height="50"
                                                    class="rounded-circle" alt="">
                                            </td>

                                            <td>{{ $entreprise->raison_social }}</td>
                                            <td>{{ $entreprise->ifu }}</td>
                                            <td>{{ $entreprise->pays }}</td>

                                            <td>
                                                <div class="dropdown">
                                                    <button id="dropdownMenuButton1" data-bs-toggle="dropdown"
                                                        aria-expanded="false"
                                                        class="rounded-circle btn-transparent btn-sm px-1 btn shadow-none">
                                                        <i class="ti ti-dots-vertical fs-7 d-block"></i>
                                                    </button>
                                                    <ul class="dropdown-menu dropdown-menu-end"
                                                        aria-labelledby="dropdownMenuButton1" style="">
                                                        <li><a class="dropdown-item"
                                                                href="{{ route('entreprises.show', $entreprise->id) }}">
                                                                <i class="ti ti-eye me-2"></i> Détails</a>
                                                        </li>
                                                        <li>
                                                            <a class="dropdown-item"
                                                                href="{{ route('entreprises.edit', $entreprise->id) }}"> <i
                                                                    class="ti ti-edit me-2"></i> Modifier</a>
                                                        </li>
                                                        <li>
                                                            <form
                                                                action="{{ route('entreprises.destroy', $entreprise->id) }}"
                                                                method="POST">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button type="submit" class="dropdown-item"
                                                                    onclick="event.preventDefault(); confirm('Are you sure to delete?') ? this.closest('form').submit() : false;"><i
                                                                        class="ti ti-trash text-danger me-2"></i>Supprimer</button>
                                                            </form>
                                                        </li>
                                                    </ul>
                                                </div>

                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $entreprises->withQueryString()->links() !!}
            </div>
        </div>
    </div>
@endsection
