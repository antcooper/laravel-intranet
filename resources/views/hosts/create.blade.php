@extends('layouts.app')

@section('content')
    <h1>Create Host</h1>

    @include('errors._list')

    {!! Form::open(['url' => 'hosts']) !!}
        @include('hosts._form')
    {!! Form::close() !!}

@stop