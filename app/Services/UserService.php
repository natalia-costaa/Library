<?php

namespace App\Services;

use App\Repositories\UserRepository;

class UserService {

	private $userRepository;

    public function __construct(UserRepository $userRepository) {
        $this->userRepository=$userRepository;
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
