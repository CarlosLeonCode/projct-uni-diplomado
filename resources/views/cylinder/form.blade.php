<div class="box box-info padding-1">
  <div class="box-body">
    <div class="form-group mb-4 mt-4">
      {{ Form::label('Tamaño', '', ['class' => 'mb-2'])}}
      {{ Form::text('size', $cylinder->size, ['class' => 'form-control p-2' . ($errors->has('size') ? ' is-invalid' : ''), 'placeholder' => 'Ingresa un tamaño']) }}
      {!! $errors->first('size', '<div class="invalid-feedback">:message</div>') !!}
    </div>
    <div class="form-group mb-4 mt-4">
      {{ Form::label('Lote') }}
      {{ Form::text('lote', $cylinder->lote, ['class' => 'form-control p-2' . ($errors->has('lote') ? ' is-invalid' : ''), 'placeholder' => 'Ingresa el lote']) }}
      {!! $errors->first('lote', '<div class="invalid-feedback">:message</div>') !!}
    </div>
    <div class="form-group mb-4 mt-4">
      {{ Form::label('Estado') }}
      {{ Form::select('status', [1 => 'Active', 2 => 'Inactive'], $cylinder->status, ['class' => 'form-select p-2' . ($errors->has('status') ? ' is-invalid' : ''), 'placeholder' => 'Selecciona un estado']) }}
      {!! $errors->first('status', '<div class="invalid-feedback">:message</div>') !!}
    </div>
  </div>
  <div class="box-footer mt20">
    <button type="submit" class="btn btn-primary w-100">{{ __('Crear') }}</button>
  </div>
</div>
