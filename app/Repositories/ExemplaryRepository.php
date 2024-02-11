<?php

namespace App\Repositories;

use App\Models\Exemplary;
use App\Models\Book;
use App\Models\Article;
use App\Repositories\Contracts\ExemplaryRepositoryInterface;

class ExemplaryRepository extends Repository implements ExemplaryRepositoryInterface {

        protected $entity;

        public function __construct(Exemplary $exemplary)
        {
        	$this->entity=$exemplary;
   	}	

        public function store($request) 
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

}
