<?php

namespace App\Repositories\Contracts;

interface ExemplaryRepositoryInterface extends RepositoryInterface {
	
	public function store($request);

	public function update($request, $id);
	
}
