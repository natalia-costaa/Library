<?php

namespace App\Repositories;

use Illuminate\Container\Container as Application;
use Illuminate\Database\Eloquent\Model;

class Repository implements RepositoryInterface {

    protected $app;

    public function __construct (Application $app)
    {
        $this->app=$app;
    }

    public function all()
    {
        return $this->app->orderBy('id')->get();
    }

    public function show($id)
    {
        return $this->app->findOrFail($id);
    }

    public function destroy($id)
    {
        $item = $this->app->findOrFail($id);
        return $item->delete($id);
    }

    public function update($request, $id)
    {
        $item = $this->app->findOrFail($id);
        return $item->update($id);
    }

}
