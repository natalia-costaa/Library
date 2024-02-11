<?php

namespace App\Services;

use App\Repositories\Contracts\UserRepositoryInterface;
use App\Http\Requests\UserRequest;
use App\Services\Interfaces\UserServiceInterface;

class UserService extends Service implements UserServiceInterface {

	private $repository;

	public function __construct(UserRepositoryInterface $repository) {
        	$this->repository=$repository;
   	}  

	public function store(UserRequest $request)
	{
		return $this->repository->store($request);
	}

}
