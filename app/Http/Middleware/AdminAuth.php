<?php
namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AdminAuth
{
    public function handle(Request $request, Closure $next): Response
    {
        if ($request->session()->get('is_admin') === true) {
            return $next($request);
        }
        $user = env('ADMIN_USER');
        $pass = env('ADMIN_PASSWORD');
        $u = $request->server('PHP_AUTH_USER');
        $p = $request->server('PHP_AUTH_PW');
        if (!$u || !$p) {
            $auth = $request->header('Authorization');
            if ($auth && str_starts_with($auth, 'Basic ')) {
                $decoded = base64_decode(substr($auth, 6));
                if ($decoded !== false && str_contains($decoded, ':')) {
                    [$u, $p] = explode(':', $decoded, 2);
                }
            }
        }
        if ($user && $pass && $u === $user && $p === $pass) {
            $request->session()->put('is_admin', true);
            return $next($request);
        }
        if ($request->expectsJson() || $request->wantsJson()) {
            return response('Unauthorized', 401)->header('WWW-Authenticate', 'Basic realm="Admin Panel"');
        }
        return redirect()->route('admin.login');
    }
}
