<?php

namespace App\Repositories;

use App\Models\User;
use App\Models\Guardian;
use App\Models\Student;
use App\Repositories\Contracts\UserRepositoryInterface;

class UserRepository implements UserRepositoryInterface {

        protected $entity;

        public function __construct(User $user)
        {
        $this->entity=$user;
    }

        public function createUser($request)
        {
                $user = $this->entity->create($request->all());

                if(!empty($request->cpf)) {
                   Guardian::create([
                'user_id' => $user->id,
                        'cpf' => $request->cpf,
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
