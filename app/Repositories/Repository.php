<?php

namespace App\Repositories;

//use Illuminate\Container\Container as Application;
use Illuminate\Database\Eloquent\Model;
use App\Repositories\Contracts\RepositoryInterface;

class Repository implements RepositoryInterface {

    //protected $app;

    protected $model;


   // public function __construct (Application $app)
   public function __construct (Model $model)
    {
        // $this->app=$app;
        $this->model = $model;
    }

    /*public function makeModel()
    {
        $model = $this->app->make($this->model());

        return $this->model =$model;
    }
    */

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

    public function update($request, $id)
    {
        $item = $this->model->findOrFail($id);
        return $item->update($id);
    }

}
