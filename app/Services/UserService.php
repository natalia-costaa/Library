<?php

namespace App\Services;

use App\Repositories\Contracts\UserRepositoryInterface;

class UserService implements UserServiceInterface {

	private $repository;

	public function __construct(userRepositoryInterfaceInterface $repository) {
        	$this->repository=$repository;
   	}  

	public function createUser($request)
	{
		return $this->userRepository->createUser($request);
	}

	public function showUser($id)
	{
		return $this->userRepository->showUser($id);
	}

	public function updateUser($request, string $id)
	{
		return $this->userRepository->updateUser($request, $id);
	}

	public function deleteUser(string $id)
	{
		return $this->userRepository->deleteUser($id);
	}


}
