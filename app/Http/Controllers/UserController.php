<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\UserService;
use App\Http\Requests\UserRequest;

class UserController extends Controller
{

    private UserService $userService;

    public function __construct(UserService $userService) {
        $this->userService=$userService;
    }  
    
      /**
     * Store a newly created resource in storage.
     */
    public function store(UserRequest $request)
    {
 	  	return $this->userService->createUser($request);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return $this->userService->showUser($id);
    }

 
    /**
     * Update the specified resource in storage.
     */
    public function update(UserRequest $request, string $id)
    {
		
     return $this->userService->updateUser($request, $id);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {              
        return $this->userService->deleteUser($id);
    }
}
