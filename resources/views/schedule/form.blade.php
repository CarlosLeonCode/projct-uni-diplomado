<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('maintance_date') }}
            {{ Form::text('maintance_date', $schedule->maintance_date, ['class' => 'form-control' . ($errors->has('maintance_date') ? ' is-invalid' : ''), 'placeholder' => 'Maintance Date']) }}
            {!! $errors->first('maintance_date', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('news') }}
            {{ Form::text('news', $schedule->news, ['class' => 'form-control' . ($errors->has('news') ? ' is-invalid' : ''), 'placeholder' => 'News']) }}
            {!! $errors->first('news', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>