<fieldset>
    <legend>Host Details</legend>
    <div class="form-group">
        {!! Form::label('name', 'Name', ['class' => 'control-label']) !!} <span class="text-info">*</span>
        {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Digital Ocean']) !!}
    </div>
</fieldset>

<div class="row">
    <div class="col-sm-8">
        {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
        <a href="{{ url('/hosts') }}" class="btn btn-link">Close</a>
    </div>
    <div class="col-sm-4 text-right text-info">
        * Required
    </div>
</div>