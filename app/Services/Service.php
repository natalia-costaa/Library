<?php

use App\Repositories\Repository;
use Illuminate\Http\Request;

class Service implements ServiceInterface {
    
    protected $repository;

    public function __construct(Repository $repository)
    {
        $this->repository = $repository;
    }

    public function all()
    {
        return $this->repository->all();
    }

    public function show($id)
    {
        return $this->repository->show($id);
    }

    public function destroy($id)
    {
        return $this->repository->destroy($id);
    }

    public function store(Request $request) 
    {
        return $this->repository->store(request);
    }

    public function update(Request $request, $id)
    {

    }

    
}
