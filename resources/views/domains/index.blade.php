@extends('layouts.app')

@section('content')
    <h1>Domains</h1>

    <p>
        <a class="btn btn-primary" href="{{ url('/domains/create') }}">Add Domain</a>
    </p>

    <table class="table table-hover">
        <thead>
        <tr>
            <th>Domain Name</th>
            <th>Renewal</th>
            <th class="hidden-xs">&nbsp;</th>
            <th class="hidden-xs">Client</th>
            <th class="hidden-xs text-right">Charge</th>
        </tr>
        </thead>
        <tbody>
            @foreach ($domains as $domain)
                <tr
                    {{-- Highlight expired domains --}}
                    @if ($domain->renewal_date->isPast())
                        class="danger"
                    {{-- Highlight domains expiring in next 30 days --}}}
                    @elseif ($domain->renewal_date->subDays(30)->isPast())
                        class="warning"
                    @endif
                >
                    <td><a href="{{ action('DomainsController@edit', ['id' => $domain->id]) }}">{{ $domain->domain }}</a></td>
                    <td>{{ $domain->renewal_date->format('d M Y') }}</td>
                    <td class="hidden-xs">{{ $domain->renewal_date->diffForHumans() }}</td>
                    <td class="hidden-xs">{{ $domain->first_name }} {{ $domain->last_name }}</td>
                    <td class="hidden-xs text-right">£{{ $domain->charge }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@stop