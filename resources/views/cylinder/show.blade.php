@extends('layouts.app')

@section('template_title')
    {{ $cylinder->name ?? "{{ __('Show') Cylinder" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Cylinder</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('cylinders.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Size:</strong>
                            {{ $cylinder->size }}
                        </div>
                        <div class="form-group">
                            <strong>Lote:</strong>
                            {{ $cylinder->lote }}
                        </div>
                        <div class="form-group">
                            <strong>Status:</strong>
                            {{ $cylinder->status }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
