<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class RolesMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle($request, Closure $next, $role)
    {
        if (!auth()->check()) {
            return redirect('login');
        }

        $userRole = auth()->user()->role->name;
        $rolesHierarchy = [
            'owner' => ['dashboard', 'reports', 'configuration'],
            'admin' => ['dashboard', 'configuration'],
            'employee' => ['dashboard', 'reports'],
        ];

        $routeName = $request->route()->getName();

        if (!in_array($routeName, $rolesHierarchy[$userRole])) {
            return redirect('dashboard')->with('error', 'У вас нет доступа к этой секции.');
        }

        return $next($request);
    }

}
