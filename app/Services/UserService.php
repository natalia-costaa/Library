<?php

namespace App\Services;

use App\Models\User;
use App\Models\Guardian;
use App\Models\Student;
use Illuminate\Http\Request;

class UserService {

	public static function createUser(Request $request)
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

	public static function showUser(string $id)
	{
		return User::find($id);
	}

	public static function updateUser(Request $request, string $id)
	{
		$user = User::findOrFail($id);
		$user->update($request->all());
		return "User updated sucessfully!";
	}

	public static function deleteUser(string $id)
	{
		$user = User::findOrFail($id);
		$user->delete();
		return "User delete sucessfully!";
	}


}
