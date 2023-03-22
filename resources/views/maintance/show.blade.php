@extends('layouts.app')

@section('template_title')
    {{ $maintance->name ?? "{{ __('Show') Maintance" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Maintance</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('maintances.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Maintance Started At:</strong>
                            {{ $maintance->maintance_started_at }}
                        </div>
                        <div class="form-group">
                            <strong>Maintance Finished At:</strong>
                            {{ $maintance->maintance_finished_at }}
                        </div>
                        <div class="form-group">
                            <strong>Maintance Type:</strong>
                            {{ $maintance->maintance_type }}
                        </div>
                        <div class="form-group">
                            <strong>Status:</strong>
                            {{ $maintance->status }}
                        </div>
                        <div class="form-group">
                            <strong>Cylinder Id:</strong>
                            {{ $maintance->cylinder_id }}
                        </div>
                        <div class="form-group">
                            <strong>Schedule Id:</strong>
                            {{ $maintance->schedule_id }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
