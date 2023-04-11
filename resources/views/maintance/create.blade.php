@extends('layouts.internal')

@section('template_title')
  {{ __('Create') }} Maintance
@endsection

@section('content')
  <section class="content container-fluid">
    <div class="row">
      <div class="col-12 col-md-2"></div>
      <div class="col-8">
        <div class="d-flex justify-content-center">
          @includeif('partials.errors')
          <div class="card card-default  w-50 shadow border-0">
            <div class="card-header border-0 p-3">
              <span class="card-title">{{ __('Crear') }} Mantenimiento</span>
            </div>
            <div class="card-body">
              <form method="POST" action="{{ route('maintances.store') }}"  role="form" enctype="multipart/form-data">
                @csrf
                @include('maintance.form')
              </form>
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
