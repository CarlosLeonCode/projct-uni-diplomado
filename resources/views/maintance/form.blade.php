<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('maintance_started_at') }}
            {{ Form::text('maintance_started_at', $maintance->maintance_started_at, ['class' => 'form-control' . ($errors->has('maintance_started_at') ? ' is-invalid' : ''), 'placeholder' => 'Maintance Started At']) }}
            {!! $errors->first('maintance_started_at', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('maintance_finished_at') }}
            {{ Form::text('maintance_finished_at', $maintance->maintance_finished_at, ['class' => 'form-control' . ($errors->has('maintance_finished_at') ? ' is-invalid' : ''), 'placeholder' => 'Maintance Finished At']) }}
            {!! $errors->first('maintance_finished_at', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('maintance_type') }}
            {{ Form::text('maintance_type', $maintance->maintance_type, ['class' => 'form-control' . ($errors->has('maintance_type') ? ' is-invalid' : ''), 'placeholder' => 'Maintance Type']) }}
            {!! $errors->first('maintance_type', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('status') }}
            {{ Form::text('status', $maintance->status, ['class' => 'form-control' . ($errors->has('status') ? ' is-invalid' : ''), 'placeholder' => 'Status']) }}
            {!! $errors->first('status', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('cylinder_id') }}
            {{ Form::text('cylinder_id', $maintance->cylinder_id, ['class' => 'form-control' . ($errors->has('cylinder_id') ? ' is-invalid' : ''), 'placeholder' => 'Cylinder Id']) }}
            {!! $errors->first('cylinder_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('schedule_id') }}
            {{ Form::text('schedule_id', $maintance->schedule_id, ['class' => 'form-control' . ($errors->has('schedule_id') ? ' is-invalid' : ''), 'placeholder' => 'Schedule Id']) }}
            {!! $errors->first('schedule_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>