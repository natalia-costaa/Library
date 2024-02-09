<?php

namespace App\Services\Interfaces;

use Illuminate\Http\Request;

class UserServiceInterface {

    public function store(Request $request);
    public function show(string $id);
    public function update(Request $request, string $id);
    public function destroy(string $id);

}
