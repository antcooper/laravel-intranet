@extends('layouts.app')

@section('content')
    <p class="help-block text-right"><small><strong>Created:</strong> 12 Mar 2014 &middot; <strong>Last updated:</strong> 12 Mar 2014</small></p>
    <h1>Edit Domain</h1>

    @include('errors._list')

    {!! Form::model( $domain, ['method' => 'PATCH', 'action' => ['DomainsController@update', $domain->id]]) !!}
        @include('domains._form')
    {!! Form::close() !!}

@stop