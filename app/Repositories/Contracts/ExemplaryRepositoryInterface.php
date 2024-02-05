<?php

namespace App\Repositories\Contracts;

interface ExemplaryRepositoryInterface {

        public function createExemplary($request);
        public function showExemplary($id);
        public function updateExemplary($request, $id);
        public function deleteExemplary($id);

}
