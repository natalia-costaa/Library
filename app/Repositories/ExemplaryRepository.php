<?php

namespace App\Repositories;

use App\Models\Exemplary;
use App\Models\Book;
use App\Models\Article;
use App\Repositories\Contracts\ExemplaryRepositoryInterface;

class ExemplaryRepository implements ExemplaryRepositoryInterface {

        protected $entity;

        public function __construct(Exemplary $exemplary)
        {
        	$this->entity=$exemplary;
   	}	

        public function createExemplary($request)
        {
                $exemplary = $this->entity->create($request->all());

                if(!empty($request->publishing_company)) {
                   Book::create([
                	'exemplary_id' => $exemplary->id,
                        'publishing_company' => $request->publishing_company,
                 ]);

                        return "Guardian created sucessfully!";

                        } else {
                  Student:: create([
                'user_id' => $user->id,
                'matricula' => $request->matricula,
                        ]);
                        return "Student created sucessfully!";
                        }
        }

        public function showUser($id)
        {
                return $this->entity->findOrFail($id);
        }

        public function updateUser($request, $id)
        {
                $user = $this->entity->findOrFail($id);
                $user->update($request->all());
                return "User updated sucessfully!";
        }

        public function deleteUser($id)
        {
                $user = $this->entity->findOrFail($id);
                $user->delete();
                return "User delete sucessfully!";
        }


}
