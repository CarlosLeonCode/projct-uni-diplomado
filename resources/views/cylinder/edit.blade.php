@extends('layouts.internal')

@section('template_title')
    {{ __('Update') }} Cylinder
@endsection

@section('content')
    <section class="content container-fluid">
      <div class="row">
        <div class="col-12 col-md-2"></div>
        <div class="col-12 col-md-8">
          <div class="d-flex justify-content-center">
            @includeif('partials.errors')
            <div class="card card-default w-50 shadow border-0">
              <div class="card-header border-0 p-3">
                  <span class="card-title">{{ __('Update') }} Cylinder</span>
              </div>
              <div class="card-body">
                <form method="POST" action="{{ route('cylinders.update', $cylinder->id) }}"  role="form" enctype="multipart/form-data" class="needs-validation">
                  {{ method_field('PATCH') }}
                  @csrf

                  @include('cylinder.form')
                </form>
                <div class="mt-3">
                  <a href="{{ route('cylinders.index') }}" class="btn btn-secondary float-right w-100"  data-placement="left">
                    {{ __('Back') }}
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
