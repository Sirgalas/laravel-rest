<?php

namespace Tests\Feature;

use App\Http\Middleware\ApiMiddleware;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CusromerTest extends TestCase
{

    use RefreshDatabase;

    /**
     * @test
     */
    public function authenticationCustomer()
    {
        $response = $this->get('/api/v1/customers');

        $response->assertStatus(401);
    }

    /**
     * @test
     */
    public function getCustomer()
    {
        $response = $this->get('/api/v1/customers', self::getToken());

        $response->assertStatus(200);
    }

    /**
     * @test
     */
    public function emptyCreate()
    {
        $data = [];
        $response = $this->post('/api/v1/customers', $data, self::getToken());
        $response->assertStatus(422);
    }

    /**
     * @test
     */
    public function notName()
    {
        $data = [
            'email' => 'test@gmail.com',
        ];

        $response = $this->post('/api/v1/customers', $data, self::getToken());
        $response->assertStatus(422);
    }

    /**
     * @test
     */
    public function notMail()
    {
        $data = [
            'name' => 'Ivan',
        ];

        $response = $this->post('/api/v1/customers', $data, self::getToken());
        $response->assertStatus(422);
    }



    /**
     * @test
     */
    public function requiredCreate()
    {
        $data = [
            'name' => 'Ivan',
            'email' => 'test@gmail.com',
        ];

        $response = $this->post('/api/v1/customers', $data, self::getToken());

        $response->assertStatus(201);
    }

    /**
     * @test
     */
    public function fullCreate()
    {
        $data = [
            'name' => 'Ivan',
            'price' => 300,
            'email' => 'test@gmail.com',
            'phone'=>'+7(978)789-78-97',
            'second_name'=>'Ivanovich',
            'family'=>'Ivanov'
        ];

        $response = $this->post('/api/v1/customers', $data, self::getToken());

        $response->assertStatus(201);
    }

    /**
     * @return array
     */
    private static function getToken() {

        return [ApiMiddleware::API_KEY_HEADER => config('services.api.token')];
    }
}
