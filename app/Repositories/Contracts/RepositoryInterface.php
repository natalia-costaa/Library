<?php

namespace App\Repositories\Contracts;

interface RepositoryInterface {

    public function all();

    public function show($id);

    public function destroy($id);
}