<?php

namespace App\Services;

use App\Repositories\ExemplaryRepository;

class ExemplaryService extends Service implements ExemplaryRepositoryInterface {

        private $repository;

    public function __construct(ExemplaryRepositoryInterface $repository) {
        $this->repository=$repository;
    }

        public function store($request)
        {
                return $this->repository->store($request);
        }

}
