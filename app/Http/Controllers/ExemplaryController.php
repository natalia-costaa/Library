<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ExemplaryRequest;
use App\Services\Interfaces\ExemplaryServiceInterface;

class ExemplaryController extends Controller
{

    private ExemplaryServiceInterface $service;

    public function __construct(ExemplaryServiceInterface $service)
    {
        $this->service=$service;
    }

    public function store(ExemplaryRequest $request)
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
    public function update(ExemplaryRequest $request, string $id)
    {
		return $this->service->update($request, $id);

    }

    /**
     * Remove the specified resource from stoerage.
     */
    public function destroy(string $id)
    {              
        return $this->service->destroy($id);
    }
}
