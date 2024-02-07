<?php

namespace App\Services;

use App\Repositories\ExemplaryRepository;

class ExemplaryService {

        private $exemplaryRepository;

    public function __construct(ExemplaryRepository $exemplaryRepository) {
        $this->exemplaryRepository=$exemplaryRepository;
    }

        public function createExemplary($request)
        {
                return $this->exemplaryRepository->createExemplary($request);
        }

        public function showexEmplary($id)
        {
                return $this->exemplaryRepository->showExemplary($id);
        }

        public function updateExemplary($request, string $id)
        {
                return $this->exemplaryRepository->updateExemplary($request, $id);
        }

        public function deleteExemplary(string $id)
        {
                return $this->exemplaryRepository->deleteExemplary($id);
        }


}
