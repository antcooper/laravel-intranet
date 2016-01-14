@extends('layouts.app')

@section('content')
    <h1>Domain</h1>

    <table class="table table-hover">
        <thead>
        <tr>
            <th>Renewal</th>
            <th>Domain Name</th>
            <th>Client</th>
            <th class="text-right">Charge</th>
        </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{ $domain->renewal_date->format('d M Y') }}</td>
                <td>{{ $domain->domain }}</td>
                <td>{{ $domain->first_name }} {{ $domain->last_name }}</td>
                <td class="text-right">£{{ $domain->charge }}</td>
            </tr>
        </tbody>
    </table>
@stop