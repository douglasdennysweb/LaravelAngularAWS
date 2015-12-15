<?php

namespace AngularLaravel\Http\Controllers;

use AngularLaravel\Repositories\ClientRepository;
use AngularLaravel\Services\ClientService;
use Illuminate\Http\Request;

class ClientsController extends Controller
{
    /**
     * @var ClientRepository
     */

    private $repository;
    /**
     * @var ClientService
     */
    private $service;

    public function __construct(ClientRepository $repository, ClientService $service)
    {
        $this->repository = $repository;
        $this->service = $service;
    }

    public function index()
    {
        return $this->repository->all();
    }

    public function show($id)
    {
        return $this->repository->find($id);
    }

    public function store(Request $request)
    {
        return $this->service->create($request->all());
    }

    public function update($id, Request $request)
    {
        return $this->service->update($request->all(), $id);
    }

    public function destroy($id)
    {
        $this->repository->delete($id);
    }
}
