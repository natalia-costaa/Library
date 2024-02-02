<?php

namespace App\Repositories\Contracts;

interface UserRepositoryInterface {
	
	public function createUser($request);
	public function showUser($id);
	public function updateUser($request, $id);
	public function deleteUser($id);
	
}
