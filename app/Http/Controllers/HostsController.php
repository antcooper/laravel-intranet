<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Host;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\HostRequest;

class HostsController extends Controller
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
     * Show all hosts
     *
     * @return Response
     */
    public function index()
    {
        $hosts = Host::orderBy('name', 'asc')->get();

        return view('hosts.index', compact('hosts'));
    }

    /**
     * Show a single host
     *
     * @param $id
     * @return Response
     */
    public function show($id)
    {
        $host = Host::findOrFail($id);
        return $host;
    }

    /**
     * Show create form for host
     *
     * @return Response
     */
    public function create()
    {
        return view('hosts.create');
    }

    /**
     * Save the host to database
     *
     * @param HostRequest $request
     * @return Redirect
     */
    public function store(HostRequest $request)
    {
        Host::create($request->all());
        return redirect('hosts');

    }

    /**
     * Show edit form
     *
     * @param $id
     * @return Response
     */
    public function edit($id)
    {
        $host = Host::findOrFail($id);
        return view('hosts.edit', compact('host'));
    }

    /**
     * Persist changes to database
     *
     * @param $id
     * @param HostRequest $request
     * @return Response
     */
    public function update($id, HostRequest $request)
    {
        $host = Host::findOrFail($id);
        $host->update($request->all());

        return redirect('hosts');
    }
}
