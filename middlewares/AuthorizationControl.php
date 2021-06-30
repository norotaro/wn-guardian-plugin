<?php

namespace Norotaro\Guardian\Middlewares;

use Closure;
use Norotaro\Guardian\Models\Client;

class AuthorizationControll
{
    public function handle($request, Closure $next)
    {
        $userAgent = $request->header('User-Agent');
        $authorization = $request->header('Authorization');

        if ($authorization && $userAgent) {
            $client = Client::active()
                ->firstWhere('shortname', $userAgent);
            $codeIsValid = (bool) $client
                ->codes()
                ->active()
                ->where('value', $authorization)
                ->count();

            if ($client && $codeIsValid) {
                return $next($request);
            }
        }

        throw new \Exception('You do not have permission for this request', 403);
    }
}
