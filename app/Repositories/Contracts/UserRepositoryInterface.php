<?php

namespace App\Repositories\Contracts;

interface UserRepositoryInterface extends RepositoryInterface {
	
	public function store($request);

	public function update($request, $id);
	
}
