<?php

namespace Tests\Unit;

// use PHPUnit\Framework\TestCase;
use Tests\TestCase;
use App\Providers\RouteServiceProvider;

class ExemplaryTest extends TestCase
{
    /**
     * A basic unit test example.
    
    public function test_example(): void
    {
        $this->assertTrue(true);
    }
    */

    public function test_create_new_article(): void
    {

        $response = $this->post('api/exemplaries', [
            'name' => 'Test Name',
            'author' => 'Test Author',
            'exemplary_type' => 'article',
            'publisher' => 'Test Publisher',
        ]);

        $response->assertStatus(200);
    }

    public function test_create_new_book(): void
    {

        $response = $this->post('api/exemplaries', [
            'name' => 'Test Name',
            'author' => 'Test Author',
            'exemplary_type' => 'book',
            'editorial' => 'Test Book',
        ]);

        $response->assertStatus(200);
    }

    public function test_without_author(): void
    {

        $response = $this->post('api/exemplaries', [
            'name' => 'Test Name',
            'exemplary_type' => 'book',
            'editorial' => 'Test Book',
        ]);

        $response->assertStatus(400);
    }
}