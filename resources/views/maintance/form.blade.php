<div class="box box-info padding-1">
  <div class="box-body">
    <div class="form-group mb-4 mt-4">
      {{ Form::label('Fecha de inicio', '', ['class' => 'mb-2']) }}
      {{ Form::input('datetime-local', 'maintance_started_at', $maintance->maintance_started_at, ['class' => 'form-control' . ($errors->has('maintance_started_at') ? ' is-invalid' : ''), 'placeholder' => 'Maintance Started At']) }}
      {!! $errors->first('maintance_started_at', '<div class="invalid-feedback">:message</div>') !!}
    </div>
    <div class="form-group mb-4 mt-4">
      {{ Form::label('Fecha de fin', '', ['class' => 'mb-2']) }}
      {{ Form::input('datetime-local', 'maintance_finished_at', $maintance->maintance_finished_at, ['class' => 'form-control' . ($errors->has('maintance_finished_at') ? ' is-invalid' : ''), 'placeholder' => 'Maintance Finished At']) }}
      {!! $errors->first('maintance_finished_at', '<div class="invalid-feedback">:message</div>') !!}
    </div>
    <div class="form-group mb-4 mt-4">
      {{ Form::label('Tipo de Mantenimiento', '', ['class' => 'mb-2']) }}
      {{ Form::text('maintance_type', $maintance->maintance_type, ['class' => 'form-control' . ($errors->has('maintance_type') ? ' is-invalid' : ''), 'placeholder' => 'Maintance Type']) }}
      {!! $errors->first('maintance_type', '<div class="invalid-feedback">:message</div>') !!}
    </div>
    <div class="form-group mb-4 mt-4">
      {{ Form::label('Estado', '', ['class' => 'mb-2']) }}
      {{ Form::select('status', ['done', 'pending'], 'pending', ['class' => 'form-select' . ($errors->has('status') ? ' is-invalid' : ''), 'placeholder' => 'Status']) }}
      {!! $errors->first('status', '<div class="invalid-feedback">:message</div>') !!}
    </div>
    <div class="form-group mb-4 mt-4">
      {{ Form::label('Cilindro ID', '', ['class' => 'mb-2']) }}
      {{ Form::select('cylinder_id', $cylinders->pluck('lote', 'id'), null, ['class' => 'form-select' . ($errors->has('cylinder_id') ? ' is-invalid' : ''), 'placeholder' => 'Cylinder Id']) }}
      {!! $errors->first('cylinder_id', '<div class="invalid-feedback">:message</div>') !!}
    </div>
  </div>
  <div class="box-footer mt20">
    <button type="submit" class="btn btn-primary w-100">{{ __('Crear') }}</button>
  </div>
</div>
