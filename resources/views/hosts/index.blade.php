@extends('layouts.app')

@section('content')
    <h1>Hosts</h1>

    <p>
        <a class="btn btn-primary" href="{{ url('/hosts/create') }}">Add Host</a>
    </p>

    <table class="table table-hover">
        <th>
            <div class="row">

            </div>
        </th>
    </table>

    <table class="table table-hover">
        <thead>
        <tr>
            <th>Name</th>
        </tr>
        </thead>
        <tbody>
            @foreach ($hosts as $host)
                <tr>
                    <td><a href="{{ action('HostsController@edit', ['id' => $host->id]) }}">{{ $host->name }}</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
@stop