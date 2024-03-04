<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use App\Services\Interfaces\UserServiceInterface;

class UserController extends Controller
{

    private UserServiceInterface $service;
    //private UserRequest $request;

    public function __construct(UserServiceInterface $service) {
        $this->service=$service;
    }  
    
      /**
     * Store a newly created resource in storage.
     */
    public function store(UserRequest $request)
    {
        return $this->service->store($request);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
       return $this->service->show($id);
    }

 
    /**
     * Update the specified resource in storage.
     */
    public function update(UserRequest $request, string $id)
    {
		
     return $this->service->update($request, $id);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {              
        return $this->service->destroy($id);
    }
}
