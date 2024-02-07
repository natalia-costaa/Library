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

                if(!empty($request->editorial)) {
                   Book::create([
			'exemplary_id' => $exemplary->id,
			 'editorial' => $request->editorial,
                 ]);

                   return "Book created sucessfully!";

                } else {
                  Article:: create([
                	'exemplary_id' => $exemplary->id,
                	'publisher' => $request->publisher,
                ]);
                   return "Article created sucessfully!";
                }
        }

        public function showExemplary($id)
        {
                return $this->entity->findOrFail($id);
        }

        public function updateExemplary($request, $id)
        {
                $user = $this->entity->findOrFail($id);
                $user->update($request->all());
                return "Exemplary updated sucessfully!";
        }

        public function deleteExemplary($id)
        {
                $user = $this->entity->findOrFail($id);
                $user->delete();
                return "Exemplary delete sucessfully!";
        }


}
