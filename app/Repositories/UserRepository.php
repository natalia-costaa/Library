<?php

namespace App\Repositories;

use App\Models\User;
use App\Models\Guardian;
use App\Models\Student;
use App\Repositories\Contracts\UserRepositoryInterface;
use Illuminate\Database\Eloquent\Model;


class UserRepository extends Repository implements UserRepositoryInterface {

	protected $entity;

	public function __construct(User $user) 
	{
        $this->entity=$user;
    }
	
	public function store($request)
	{
		if(!empty($request->cpf)) {
			Guardian::create([ 
			 'user_id' => $user->id,
			 'cpf' => $request->cpf,
			 ]);
		 
		 return "Guardian created sucessfully!";

		 } else {
		   Student:: create([ 
			 'user_id' => $user->id,
			 'matricula' => $request->matricula,
		 ]);
		 return "Student created sucessfully!";
		 }	
	}

	public function update($request, $id)
	{
		$user = $this->entity->findOrFail($id);
		$user->update($request->all());
		return "User updated sucessfully!";
	}


}

