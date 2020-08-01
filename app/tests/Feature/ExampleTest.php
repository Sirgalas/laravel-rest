<?php

namespace Tests\Feature;

use App\Http\Middleware\ApiMiddleware;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * @test
     */

    public function falseAuth(){
        $response=$this->get('/');
        $response->assertStatus(401);
    }

    /**
     * @test
     */
   public function trueAuth(){
        $response=$this->get('/', self::getToken());
        $response->assertStatus(200);
    }

    private static function getToken() {

        return [ApiMiddleware::API_KEY_HEADER => config('services.api.token')];
    }
}
