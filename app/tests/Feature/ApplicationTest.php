<?php

namespace Tests\Feature;

use App\Entities\Application;
use App\Entities\Freelancer;
use App\Http\Middleware\ApiMiddleware;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ApplicationTest extends TestCase
{

    use RefreshDatabase;

    /**
     * @test
     */
    public function authenticationApplication()
    {
        $response = $this->get('/api/v1/applications');

        $response->assertStatus(401);
    }

    /**
     * @test
     */
    public function getApplication()
    {
        $response = $this->get('/api/v1/applications', self::getToken());

        $response->assertStatus(200);
    }


    /**
     * @test
     */
    public function emptyCreate()
    {
        $data = [];
        $response = $this->post('/api/v1/applications', $data, self::getToken());
        $response->assertStatus(422);
    }

    /**
     * @test
     */
    public function notName()
    {
        $data = [
            'order_id' => 1,
            'freelancer_id'=>1
        ];

        $response = $this->post('/api/v1/applications', $data, self::getToken());
        $response->assertStatus(422);
    }

    /**
     * @test
     */
    public function notOrder()
    {
        $data = [
            'name' => 'Name',
            'freelancer_id'=>1
        ];

        $response = $this->post('/api/v1/applications', $data, self::getToken());
        $response->assertStatus(422);
    }

    /**
     * @test
     */
    public function notFreelancer()
    {
        $data = [
            'name' => 'Name',
            'order_id'=>1
        ];

        $response = $this->post('/api/v1/applications', $data, self::getToken());
        $response->assertStatus(422);
    }

    /**
     * @test
     */
    public function wrongOrder()
    {
        $order=Application::max('id');
        $data = [
            'name'=>'Name',
            'customer_id' => $order+10,
            'freelancer_id'=>1
        ];

        $response = $this->post('/api/v1/applications', $data, self::getToken());
        $response->assertStatus(422);
    }

    /**
     * @test
     */
    public function wrongFreelancer()
    {
        $freelancer=Freelancer::max('id');
        $data = [
            'name'=>'Name',
            'customer_id' => 1,
            'freelancer_id'=>$freelancer+10
        ];

        $response = $this->post('/api/v1/applications', $data, self::getToken());
        $response->assertStatus(422);
    }

    /**
     * @test
     */
    public function requiredCreate()
    {
        $data = [
            'name'=>'Name',
        ];

        $response = $this->post('/api/v1/applications', $data, self::getToken());

        $response->assertStatus(201);
    }

    /**
     * @test
     */
    public function fullCreate()
    {
        $data = [
            'name' => 'Name',
            'comment'=>'comment',
            'freelancer_id' => 1,
            'order_id' => 1
        ];
        $response = $this->post('/api/v1/applications', $data, self::getToken());
        $response->assertStatus(201);
    }

    /**
     * @return array
     */
    private static function getToken() {

        return [ApiMiddleware::API_KEY_HEADER => config('services.api.token')];
    }
}
