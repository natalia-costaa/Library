<?php

namespace App\Repositories;

use App\Models\User;
use App\Models\Guardian;
use App\Models\Student;
use App\Repositories\Contracts\UserRepositoryInterface;
use Illuminate\Database\Eloquent\Model;


class UserRepository extends Repository implements UserRepositoryInterface {

/*	protected $entity;

	public function __construct(User $user) 
	{
        $this->entity=$user;
    }
*/
	public function store($request)
	{
		$user = $this->model>create([
			'name'=> $request->name,
			'email'=> $request->email,
			'password'=> $request->password,
			'user_type'=> User::class]);

			if(!empty($request->cpf)) {
				Guardian::create([ 
				 'user_id' => $user->id,
				 'cpf' => $request->cpf,
				 ]);
			 
			 return "Guardian created sucessfully!";
	
			 } else {
			   Student:: create([ 
				 'user_id' =>  $user->id,
				 'matricula' => $request->matricula,
			   ]);
			 }
			

/*		$user = User::create([
			'name'=> $request->name,
			'email'=> $request->email,
			'password'=> $request->password,
			'user_type'=> User::class]);

		if(!empty($request->cpf)) {
			Guardian::create([ 
			 'user_id' => $user->id,
			 'cpf' => $request->cpf,
			 ]);
		 
		 return "Guardian created sucessfully!";

		 } else {
		   Student:: create([ 
			 'user_id' =>  $user->id,
			 'matricula' => $request->matricula,
		 ]);
		 return "Student created sucessfully!";
		 }	
		 */
	}

	function model(): string {
		return User::class;
	}

}