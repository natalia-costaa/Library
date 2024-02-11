<?php

namespace App\Repositories\Contracts;

interface RepositoryInterface {

    public function all();

    public function show($id);

    public function destroy($id);

    public function store($request);

	public function update($request, $id);
}
