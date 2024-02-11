<?php

namespace App\Services;

use App\Repositories\Repository;
use App\Services\Interfaces\ServiceInterface;
use Illuminate\Http\Request;

abstract class Service implements ServiceInterface {
    
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

    public function update(Request $request, $id)
    {
        return $this->repository->update($request, $id);
    }

    abstract public function store(Request $request);

}
