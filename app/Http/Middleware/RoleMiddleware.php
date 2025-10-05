<?php

namespace App\Http\Middleware;

use App\Enum\UserRole;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class RoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, string $role): Response
    {
        $user = $request->user();
        $requiredRole = UserRole::tryFrom($role);

        if (!$user) {
            return redirect()->route('login');
        }

        // Jika role tidak cocok
        if ($user->role !== $requiredRole) {
            // Jika URL tujuan sudah sama, jangan redirect ulang
            $currentPath = trim($request->path(), '/');
            $targetPath = "dashboard/" . strtolower($user->role->name);

            if ($currentPath !== $targetPath) {
                return redirect("/" . $targetPath);
            }
        }

        return $next($request);
    }
}
