<div class="box box-info padding-1">
  <div class="box-body">
    <div class="form-group mb-4 mt-4">
      {{ Form::label('size', '', ['class' => 'mb-2'])}}
      {{ Form::text('size', $cylinder->size, ['class' => 'form-control p-2' . ($errors->has('size') ? ' is-invalid' : ''), 'placeholder' => 'Size']) }}
      {!! $errors->first('size', '<div class="invalid-feedback">:message</div>') !!}
    </div>
    <div class="form-group mb-4 mt-4">
      {{ Form::label('lote') }}
      {{ Form::text('lote', $cylinder->lote, ['class' => 'form-control p-2' . ($errors->has('lote') ? ' is-invalid' : ''), 'placeholder' => 'Lote']) }}
      {!! $errors->first('lote', '<div class="invalid-feedback">:message</div>') !!}
    </div>
    <div class="form-group mb-4 mt-4">
      {{ Form::label('status') }}
      {{ Form::select('status', [1 => 'Active', 2 => 'Inactive'], $cylinder->status, ['class' => 'form-select p-2' . ($errors->has('status') ? ' is-invalid' : ''), 'placeholder' => 'Select a status']) }}
      {!! $errors->first('status', '<div class="invalid-feedback">:message</div>') !!}
    </div>
  </div>
  <div class="box-footer mt20">
    <button type="submit" class="btn btn-primary w-100">{{ __('Submit') }}</button>
  </div>
</div>
