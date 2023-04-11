@extends('layouts.internal')

@section('template_title')
  {{ $cylinder->name ?? "{{ __('Show') Cylinder" }}
@endsection

@section('content')
  <section class="content container-fluid">
    <div class="row">
      <div class="col-12 col-md-2"></div>
      <div class="col-12 col-md-8">
        <div class="d-flex justify-content-center">
          <div class="card card-default w-50 shadow border-0">
            <div class="card-header border-0 p-3">
              <span class="card-title">{{ __('Detalles') }} de Cilindro</span>
            </div>
            <div class="card-body">
              <div class="form-group m-2">
                <strong>Tamaño:</strong>
                {{ $cylinder->size }}
              </div>
              <div class="form-group m-2">
                <strong>Lote:</strong>
                {{ $cylinder->lote }}
              </div>
              <div class="form-group m-2">
                <strong>Estado:</strong>
                {{ $cylinder->status }}
              </div>
              <div class="mt-3">
                <a href="{{ route('cylinders.index') }}" class="btn btn-secondary float-right w-100"  data-placement="left">
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

