@extends('layouts.app')

@section('template_title')
    {{ $entreprise->name ?? __('Show') . ' ' . __('Entreprise') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Entreprise</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('entreprises.index') }}">
                                {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">

                        <div class="form-group mb-2 mb20">
                            <strong>Raison Social:</strong>
                            {{ $entreprise->raison_social }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Ifu:</strong>
                            {{ $entreprise->ifu }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Pays:</strong>
                            {{ $entreprise->pays }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Logo:</strong>
                            {{ $entreprise->logo }}
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-12">
                @include('annex.index', ['annexes' => $entreprise->annexes()->paginate()])
            </div>
        </div>
    </section>
@endsection
