@extends('layouts.app')

@section('content')
    <p class="help-block text-right"><small><strong>Created:</strong> 12 Mar 2014 &middot; <strong>Last updated:</strong> 12 Mar 2014</small></p>
    <h1>Create Domain</h1>

    @include('errors._list')

    {!! Form::open(['url' => 'domains']) !!}
        @include('domains._form')
    {!! Form::close() !!}

@stop