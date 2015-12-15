<?php

namespace AngularLaravel\Http\Controllers;

use AngularLaravel\Repositories\ClientRepository;
use Illuminate\Http\Request;

class ClientsController extends Controller
{
    /**
     * @var ClientRepository
     */
    private $repository;

    public function __construct(ClientRepository $repository)
    {
        $this->repository = $repository;
    }

    public function index(ClientRepository $repository)
    {
        return $this->repository->all();
    }

    public function show($id)
    {
        return $this->repository->find($id);
    }

    public function store(Request $request)
    {
        return $this->repository->create($request->all());
    }

    public function update($id, Request $request)
    {
        return $this->repository->find($id)->update($request->all());
    }

    public function destroy($id)
    {
        $this->repository->find($id)->delete();
    }
}
