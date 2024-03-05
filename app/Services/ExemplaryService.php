<?php

namespace App\Services;

use App\Repositories\Contracts\ExemplaryRepositoryInterface;
use App\Services\Interfaces\ExemplaryServiceInterface;
use Illuminate\Http\Request;

class ExemplaryService extends Service implements ExemplaryServiceInterface {

     //   protected $repository;

        public function __construct(ExemplaryRepositoryInterface $repository) {
            $this->repository=$repository;
        }

        public function store($request)
        {
                return $this->repository->store($request);
        }

}
