<div class="form-group {{ $errors->has('nama') ? 'has-error' : ''}}">
    {!! Form::label('nama', 'Nama', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('nama', null, ['class' => 'form-control']) !!}
        {!! $errors->first('nama', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('alamat') ? 'has-error' : ''}}">
    {!! Form::label('alamat', 'Alamat', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::textarea('alamat', null, ['class' => 'form-control']) !!}
        {!! $errors->first('alamat', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('smpn') ? 'has-error' : ''}}">
    {!! Form::label('smpn', 'Smpn', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('smpn', null, ['class' => 'form-control']) !!}
        {!! $errors->first('smpn', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('nilai_un') ? 'has-error' : ''}}">
    {!! Form::label('nilai_un', 'Nilai Un', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('nilai_un', null, ['class' => 'form-control']) !!}
        {!! $errors->first('nilai_un', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('user_id') ? 'has-error' : ''}}">
    {!! Form::label('user_id', 'User Id', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('user_id', Auth::id(), ['class' => 'form-control']) !!}
        {!! $errors->first('user_id', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        {!! Form::submit(isset($submitButtonText) ? $submitButtonText : 'Create', ['class' => 'btn btn-primary']) !!}
    </div>
</div>
