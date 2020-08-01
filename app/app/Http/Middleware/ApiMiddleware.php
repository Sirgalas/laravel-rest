<?php


namespace App\Http\Middleware;


use Closure;
use App\Traits\ApiResponse;
use Illuminate\Auth\Middleware\Authenticate as Middleware;

class ApiMiddleware extends Middleware
{
    use ApiResponse;

    const API_KEY_HEADER = 'x-api-key';

    public function handle($request, Closure $next, ...$guards)
    {
        $token = $request->header(self::API_KEY_HEADER);

        if ($token === null) {
            return $this->sendError( 'Unauthorized.', 401);
        }

        if ($token !== config('services.api.token')) {
            return $this->sendError('Unauthorized.', 401);
        }

        return $next($request);
    }
}
