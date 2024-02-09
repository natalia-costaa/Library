<?php

namespace App\Services;

use App\Repositories\Contracts\UserRepositoryInterface;
use App\Http\Requests\UserRequest;
use App\Services\Interfaces\UserServiceInterface;

class UserService implements UserServiceInterface {

	private $repository;

	public function __construct(userRepositoryInterface $repository) {
        	$this->repository=$repository;
   	}  

	public function store(UserRequest $request)
	{
		return $this->repository->createUser($request);
	}

	public function show(string $id)
	{
		return $this->repository->showUser($id);
	}

	public function update(UserRequest $request, string $id)
	{
		return $this->repository->updateUser($request, $id);
	}

	public function destroy(string $id)
	{
		return $this->repository->deleteUser($id);
	}


}
