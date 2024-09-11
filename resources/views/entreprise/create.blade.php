@extends('layouts.app')

@section('template_title')
    {{ __('Create') }} Entreprise
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                <div class="card card-default">
                    <div class="card-header">
                        
                        <h5 class="card-title fw-semibold mb-4">Nouveau Entreprise</h5>
                    </div>
                    <div class="card-body bg-white">
                        <form method="POST" action="{{ route('entreprises.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('entreprise.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
