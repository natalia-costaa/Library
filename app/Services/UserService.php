<?php

namespace App\Services;

use App\Models\User;
use App\Models\Guardian;
use App\Models\Student;
use App\Repositories\UserRepository;

class UserService {

	protected $userRepository;

/*	function __construct(UserRepository $userRepository) {
		$this->userRepository=$$userRepository;
	}
*/

	public function createUser($request)
	{
		$user = User::create($request->all());

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

	public function showUser(string $id)
	{
		return User::find($id);
	}

	public function updateUser($request, string $id)
	{
		$user = User::findOrFail($id);
		$user->update($request->all());
		return "User updated sucessfully!";
	}

	public function deleteUser(string $id)
	{
		$user = User::findOrFail($id);
		$user->delete();
		return "User delete sucessfully!";
	}


}
