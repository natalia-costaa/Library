<?php

namespace App\Services;

use App\Repositories\Contracts\UserRepositoryInterface;
use App\Services\Interfaces\UserServiceInterface;
use Illuminate\Http\Request;

class UserService extends Service implements UserServiceInterface {

//	protected UserRepositoryInterface $repository;

	public function __construct(UserRepositoryInterface $repository) {
        	$this->repository=$repository;
   	}  

      
	public function store(Request $request)
	{
		return $this->repository->store($request);
	}

}
