<?php

namespace App\Repositories;

class UserRepository {

	public function createUser(User $user);
	public function showUser(string $id);
	public function updateUser(User $user,string $id);
	public function deleteUser(string $id);
}

