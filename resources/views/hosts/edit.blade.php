@extends('layouts.app')

@section('content')
    <p class="help-block text-right"><small><strong>Created:</strong> 12 Mar 2014 &middot; <strong>Last updated:</strong> 12 Mar 2014</small></p>
    <h1>Edit Host</h1>

    @include('errors._list')

    {!! Form::model( $host, ['method' => 'PATCH', 'action' => ['HostsController@update', $host->id]]) !!}
        @include('hosts._form')
    {!! Form::close() !!}

@stop