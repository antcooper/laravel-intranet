<fieldset>
    <input type="hidden" name="hostid" value="1">
    <legend>Domain Details</legend>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                {!! Form::label('domain', 'Domain', ['class' => 'control-label']) !!} <span class="text-info">*</span>
                {!! Form::text('domain', null, ['class' => 'form-control', 'placeholder' => 'example.com']) !!}
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                {!! Form::label('charge', 'Charge', ['class' => 'control-label']) !!}
                <div class="input-group">
                    <div class="input-group-addon">£</div>
                    {!! Form::text('charge', null, ['class' => 'form-control', 'placeholder' => '100.00']) !!}
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                {!! Form::label('renewal_date', 'Renewal Date', ['class' => 'control-label']) !!} <span class="text-info">*</span>
                {{-- Should be able to use mutators but doesn't appear to work --}}
                {{-- https://laravelcollective.com/docs/5.2/html#form-model-accessors --}}
                @if (isset($domain->renewal_date))
                    <input type="text" name="renewal_date" id="renewal_date" class="form-control" placeholder="yyyy-mm-dd" value="{{ $domain->renewal_date->format('Y-m-d') }}">
                @else
                    <input type="text" name="renewal_date" id="renewal_date" class="form-control" placeholder="yyyy-mm-dd" value="">
                @endif
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                {!! Form::label('duration', 'Duration', ['class' => 'control-label']) !!} <span class="text-info">*</span>
                <div class="input-group">
                    {!! Form::text('duration', null, ['class' => 'form-control', 'placeholder' => '12']) !!}
                    <div class="input-group-addon">months</div>
                </div>
            </div>
        </div>
    </div>
</fieldset>

<fieldset>
    <legend>Client Detail</legend>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                {!! Form::label('first_name', 'Contact Name', ['class' => 'control-label']) !!} <span class="text-info">*</span>
                <div class="row">
                    <div class="col-xs-6">
                        {!! Form::text('first_name', null, ['class' => 'form-control ', 'placeholder' => 'Fred']) !!}
                    </div>
                    <div class="col-xs-6">
                        {!! Form::text('last_name', null, ['class' => 'form-control', 'placeholder' => 'Smith']) !!}
                    </div>
                </div>
            </div>

            <div class="form-group">
                {!! Form::label('email', 'Email', ['class' => 'control-label']) !!} <span class="text-info">*</span>
                {!! Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'fred@example.com']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('company', 'Company', ['class' => 'control-label']) !!}
                {!! Form::text('company', null, ['class' => 'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('send_notification', 'Send email notification', ['class' => 'control-label']) !!}
                <div class="input-group">
                    <label class="radio-inline">
                        {!! Form::radio('send_notification', '1', true ); !!} Yes
                    </label>
                    <label class="radio-inline">
                        {!! Form::radio('send_notification', '0'); !!} No
                    </label>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                {!! Form::label('host_id', 'Host', ['class' => 'control-label']) !!}
                <select name="host_id" class="form-control">
                    <option value="0">-</option>
                    @foreach($hosts as $host)
                        <option value="{{ $host->id }}" @if(isset($domain->hostid) && $domain->hostid == $host->id) selected @endif>{{ $host->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                {!! Form::label('notes', 'Notes', ['class' => 'control-label']) !!}
                {!! Form::textarea('notes', null, ['class' => 'form-control', 'rows' => '4']) !!}
            </div>
        </div>
    </div>
</fieldset>

<div class="row">
    <div class="col-sm-8">
        {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
        <a href="{{ url('/domains') }}" class="btn btn-link">Close</a>
    </div>
    <div class="col-sm-4 text-right text-info">
        * Required
    </div>
</div>