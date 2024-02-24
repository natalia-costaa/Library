<?php

namespace App\Services;

use App\Repositories\Contracts\ExemplaryRepositoryInterface;

class ExemplaryService extends Service implements ExemplaryRepositoryInterface {

        protected $repository;

        public function __construct(ExemplaryRepositoryInterface $repository) {
            $this->repository=$repository;
        }

        public function store($request)
        {
                return $this->repository->store($request);
        }

}
