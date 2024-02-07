<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\ExemplaryService;
use App\Http\Requests\ExemplaryRequest;

class ExemplaryController extends Controller
{

    private ExemplaryService $exemplaryService;

    public function __construct(ExemplaryService $exemplaryService){
        $this->exemplaryService=$exemplaryService;
    }

    public function store(ExemplaryRequest $request)
    {
 	  	return $this->exemplaryService->createExemplary($request);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return $this->exemplaryService->showexemplary($id);
    }

 
    /**
     * Update the specified resource in storage.
     */
    public function update(exemplaryRequest $request, string $id)
    {
		
     return $this->exemplaryService->updateExemplary($request, $id);

    }

    /**
     * Remove the specified resource from stoerage.
     */
    public function destroy(string $id)
    {              
        return $this->exemplaryService->deleteExemplary($id);
    }
}
