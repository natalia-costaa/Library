<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Guardian;
use App\Models\Student;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
         $users = User::all();
         return $users;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
 	   $validatedData = $request->validate([
            'name' => 'required', 'string',
            'email' => 'required', 'string',
            'user_type' => 'required', 'string',
            'cpf' => 'required_without:matricula', 'nullable', 'string',
            'matricula' => 'required_without:cpf', 'nullable', 'string',
       ]);

	   $user = User::create($request->all());

       if(!empty($request->cpf)) {
        Guardian::create([ 
            'user_id' => $user->id,
	    'cpf' => $request->cpf,
        ]);
        return "Guardian created successfully.";
       }
       
       if(!empty($request->matricula)) { 
        Student:: create([ 
            'user_id' => $user->id,
            'matricula' => $request->matricula,
        ]);
        return "Student created successfully.";
       }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $user = User::find($id);
        return $user;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $user=User::find($id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
	$validatedData = $request->validate([
            'name' => 'required', 'string',
            'email' => 'required', 'string',
            'user_type' => 'required', 'string',
            'cpf' => 'required_without:matricula', 'nullable', 'string',
            'matricula' => 'required_without:cpf', 'nullable', 'string',
	 ]);

	$user = User::findOrFail($id);
	$user->update($request->all());

	 return "Updated successfully.";

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user = User::findOrFail($id);
        $user->delete();
                
        return "User deleted sucessfully!";
    }
}
