<?php

namespace App\Http\Controllers;

use App\Domain;
use App\Host;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\DomainRequest;
use Carbon\Carbon;

class DomainsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show all domains
     *
     * @return Response
     */
    public function index()
    {
        $domains = Domain::oldest('renewal_date')->get();

        return view('domains.index', compact('domains'));
    }

    /**
     * Show a single domain
     *
     * @param $id
     * @return Response
     */
    public function show($id)
    {
        // TODO: Throws ModelNotFoundException which we need to handle gracefully
        $domain = Domain::findOrFail($id);
        return $domain;
    }

    /**
     * Show create form for domain
     *
     * @return Response
     */
    public function create()
    {
        // Retrieve list of hosts to assign
        $hosts = Host::orderby('name')->lists('name', 'id');

        return view('domains.create', compact('hosts'));
    }

    /**
     * Save the domain to database
     *
     * @param DomainRequest $request
     * @return Redirect
     */
    public function store(DomainRequest $request)
    {
        Domain::create($request->all());

        return redirect('domains')->with([
            'flash_message' => 'Domain added'
        ]);

    }

    /**
     * Show edit form
     *
     * @param $id
     * @return Response
     */
    public function edit($id)
    {
        $domain = Domain::findOrFail($id);

        // Retrieve list of hosts to assign
        $hosts = Host::orderby('name')->lists('name', 'id');

        return view('domains.edit', compact('domain', 'hosts'));
    }

    /**
     * Persist changes to database
     *
     * @param $id
     * @param DomainRequest $request
     * @return Response
     */
    public function update($id, DomainRequest $request)
    {
        $domain = Domain::findOrFail($id);
        $domain->update($request->all());

        return redirect('domains')->with([
            'flash_message' => 'Domain updated'
        ]);
    }
}
