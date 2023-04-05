@extends('layouts.internal')

@section('template_title')
  {{ $maintance->name ?? "{{ __('Show') Maintance" }}
@endsection

@section('content')
  <section class="content container-fluid">
    <div class="row">
      <div class="col-12 col-md-2"></div>
      <div class="col-8">
        <div class="d-flex justify-content-center">
          <div class="card card-default w-50 shadow border-0">
            <div class="card-header  border-0 p-3">
              <div class="float-left">
                <span class="card-title">{{ __('Detalles') }} de Mantenimiento</span>
              </div>
            </div>
            <div class="card-body">
              <div class="form-group m-2">
                <strong>Inicio de Mantenimiento:</strong>
                {{ $maintance->maintance_started_at }}
              </div>
              <div class="form-group m-2">
                <strong>Fecha de fin:</strong>
                {{ $maintance->maintance_finished_at }}
              </div>
              <div class="form-group m-2">
                <strong>Tipo de Mantenimiento:</strong>
                {{ $maintance->maintance_type }}
              </div>
              <div class="form-group m-2">
                <strong>Tipo de Mantenimiento:</strong>
                {{ $maintance->status }}
              </div>
              <div class="form-group m-2">
                <strong>Cilindro ID:</strong>
                {{ $maintance->cylinder_id }}
              </div>
              <div class="mt-3">
                <a href="{{ route('maintances.index') }}" class="btn btn-secondary float-right w-100"  data-placement="left">
                  {{ __('Volver') }}
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-12 col-md-2"></div>
    </div>
  </section>
@endsection
