@extends('layouts.app')

@section('template_title')
    {{ $manager->name ?? __('Show') . " " . __('Manager') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Manager</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('managers.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                                <div class="form-group mb-2 mb20">
                                    <strong>Nom:</strong>
                                    {{ $manager->nom }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Prenom:</strong>
                                    {{ $manager->prenom }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Email:</strong>
                                    {{ $manager->email }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Telephone:</strong>
                                    {{ $manager->telephone }}
                                </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
