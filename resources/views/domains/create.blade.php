@extends('layouts.app')

@section('content')
    <h1>Create Domain</h1>

    @include('errors._list')

    {!! Form::open(['url' => 'domains']) !!}
        @include('domains._form')
    {!! Form::close() !!}

@stop