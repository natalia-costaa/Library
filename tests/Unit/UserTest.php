<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class UserTest extends TestCase
{

    
    public function test_create_new_student(): void
    {

        $response = $this->post('v1/users', [
            'name' => 'Test User',
            'email' => 'test@example.com',
            'user_type' => 'estudante',
            'password' => 'password',
            'matricula' => '1',
        ]);

        $response->assertStatus(200);

    }
}
