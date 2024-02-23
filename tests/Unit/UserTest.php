<?php

namespace Tests\Unit;

//use PHPUnit\Framework\TestCase;
use Tests\TestCase;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Testing\RefreshDatabase;
 
class UserTest extends TestCase
{
    use RefreshDatabase;

    
    public function test_create_new_student(): void
    {

        $response = $this->post('api/users', [
            'name' => 'Test User',
            'email' => 'test_student@example.com',
            'user_type' => 'estudante',
            'password' => 'password',
            'matricula' => '1',
        ]);

        $response->assertStatus(200);

    }

    public function test_create_new_guardian(): void
    {
        $response =$this->post('api/users', [
        'name' => 'Test User',
        'email' => 'test_guardian@example.com',
        'user_type' => 'guardian',
        'password' => 'password1',
        'cpf' => '11',
    ]);

        $response->assertStatus(200);
    }

   /* public function test_create_same_students_twice(): void
    {
        $response=$this->post('api/users', [
            'name' => 'Test User',
            'email' => 'test_student@example.com',
            'user_type' => 'estudante',
            'password' => 'password',
            'matricula' => '1',
        ]);

        $response->assertStatus(400);
    }
    */

    public function test_user_without_email(): void
    {
        $response =$this->post('api/users', [
            'name' => 'Test User',
            'user_type' => 'guardian',
            'password' => 'password1',
            'cpf' => '11',
        ]);

        $response->assertStatus(400);
    }


    // cria o mesmo estudante duas vezes (espera um cõdigo de bad request)
    // Cria usuário sem matricula, nem cpf (espera um erro bad request dizendo que faltou algum dado)
    // Cria usuario sem email
    // cria usuario sem nome
    // cria usuario sem senha
    // cria usuario sem user_type -> Não deve dar erro 
    // cria usuario com user_type -> ignora o user_type e deduz a partir da matricula ou Cpf
    // testa matricula/cpf
    
}
