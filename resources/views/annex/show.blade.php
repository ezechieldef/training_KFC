@extends('layouts.app')

@section('template_title')
    {{ $annex->name ?? __('Show') . " " . __('Annex') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Annex</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('annexes.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                                <div class="form-group mb-2 mb20">
                                    <strong>Entreprise Id:</strong>
                                    {{ $annex->entreprise_id }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Manager Id:</strong>
                                    {{ $annex->manager_id }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Nom:</strong>
                                    {{ $annex->nom }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Ville:</strong>
                                    {{ $annex->ville }}
                                </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
