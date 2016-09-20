@extends('layouts.app')

@section('content')
    <p class="help-block text-right">
        <small><strong>Created:</strong> {{ $domain->created_at->format('d M Y') }} &middot; <strong>Last updated:</strong> {{ $domain->updated_at->format('d M Y') }}</small>
    </p>
    <h1>Edit Domain</h1>

    @include('errors._list')

    {!! Form::model( $domain, ['method' => 'PATCH', 'action' => ['DomainsController@update', $domain->id]]) !!}
        @include('domains._form')
    {!! Form::close() !!}

@stop