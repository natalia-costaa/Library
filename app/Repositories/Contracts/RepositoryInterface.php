<?php

namespace App\Repositories\Contracts;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Collection;

interface RepositoryInterface {

    public function all();

    public function show($id);

    public function destroy($id);

    public function update($request, $id);
}
