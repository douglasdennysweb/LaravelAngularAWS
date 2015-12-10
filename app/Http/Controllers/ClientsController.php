<?php

namespace AngularLaravel\Http\Controllers;

use AngularLaravel\Client;
use AngularLaravel\Http\Requests;
use Illuminate\Http\Request;

class ClientsController extends Controller
{
    /**
     * @var Client
     */
    private $client;

    /**
     * ClientsController constructor.
     * @param Client $client
     */
    public function __construct(Client $client)
    {
        $this->client = $client;
    }

    public function index()
    {
        return $this->client->all();
    }

    public function show($id)
    {
        return $this->client->find($id);
    }

    public function store(Request $request)
    {
        return $this->client->create($request->all());
    }

    public function update($id, Request $request)
    {
        $this->client->find($id)->update($request->all());
    }

    public function destroy($id)
    {
        $this->client->find($id)->delete();
    }
}
