<?php

namespace Tests\Feature;

use App\Entities\Order;
use App\Http\Middleware\ApiMiddleware;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class OrderTest extends TestCase
{

    use RefreshDatabase;

    /**
     * @test
     */
    public function authenticationOrder()
    {
        $response = $this->get('/api/v1/orders');

        $response->assertStatus(401);
    }

    /**
     * @test
     */
    public function getOrder()
    {
        $response = $this->get('/api/v1/orders', self::getToken());

        $response->assertStatus(200);
    }

    /**
     * @test
     */
    public function authenticationCustomer()
    {
        $response = $this->get('/api/v1/orders');

        $response->assertStatus(401);
    }


    /**
     * @test
     */
    public function emptyCreate()
    {
        $data = [];
        $response = $this->post('/api/v1/orders', $data, self::getToken());
        $response->assertStatus(422);
    }

    /**
     * @test
     */
    public function notName()
    {
        $data = [
            'customer_id' => 1,
        ];

        $response = $this->post('/api/v1/orders', $data, self::getToken());
        $response->assertStatus(422);
    }

    /**
     * @test
     */
    public function notOrder()
    {
        $data = [
            'name' => 'Name',
        ];

        $response = $this->post('/api/v1/orders', $data, self::getToken());
        $response->assertStatus(422);
    }

    /**
     * @test
     */
    public function wrongOrder()
    {
        $order=Order::max('id');
        $data = [
            'name'=>'Name',
            'customer_id' => $order+10,
        ];

        $response = $this->post('/api/v1/orders', $data, self::getToken());
        $response->assertStatus(422);
    }

    /**
     * @test
     */
    public function requiredCreate()
    {
        $data = [
            'name'=>'Name',
            'customer_id' => 1,
        ];

        $response = $this->post('/api/v1/orders', $data, self::getToken());

        $response->assertStatus(201);
    }

    /**
     * @test
     */
    public function fullCreate()
    {
        $data = [
            'name' => 'Name',
            'description'=>'desc',
            'customer_id' => 1,
        ];
        $response = $this->post('/api/v1/orders', $data, self::getToken());
        $response->assertStatus(201);
    }

    /**
     * @return array
     */
    private static function getToken() {

        return [ApiMiddleware::API_KEY_HEADER => config('services.api.token')];
    }
}
