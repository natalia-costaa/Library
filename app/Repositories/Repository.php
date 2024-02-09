<?php

namespace App\Repositories\Contracts;

use Illuminate\Container\Container as Application;
use Illuminate\Database\Eloquent\Model;

class Repository implements RepositoryInterface {

    protected $app;

    protected $model;

    public function __construct (Application $app)
    {
        $this->app=$app;
        $this->makeModel();
    }

    public function all()
    {
        return $this->model->orderBy('id')->get();
    }

    public function show($id)
    {
        return $this->model->findOrFail($id);
    }

    public function destroy($id)
    {
        $item = $this->model->findOrFail($id);
        return $item->delete($id);
    }


}
