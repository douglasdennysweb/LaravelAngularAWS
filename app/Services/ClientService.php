<?php

namespace AngularLaravel\Services;


use AngularLaravel\Repositories\ClientRepository;
use AngularLaravel\Validators\ClientValidator;
use Illuminate\Contracts\Validation\ValidationException;

class ClientService
{
    /**
     * @var ClientRepository
     */
    private $repository;
    /**
     * @var ClientValidator
     */
    private $validator;

    public function __construct(ClientRepository $repository, ClientValidator $validator)
    {
        $this->repository = $repository;
        $this->validator = $validator;
    }

    public function create(array $data)
    {
        try {
            $this->validator->with($data)->passesOrFail();
            return $this->repository->create($data);
        } catch(ValidationException $e) {
            return [
                'error' => true,
                'message' => $e->getMessage()
            ];
        }
    }

    public function update(array $data, $id)
    {
        try {
            $this->validator->with($data)->passesOrFail();
            return $this->repository->update($data, $id);
        } catch(ValidationException $e) {
            return [
                'error' => true,
                'message' => $e->getMessage()
            ];
        }
    }
}