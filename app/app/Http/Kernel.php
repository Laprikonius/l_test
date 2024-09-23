<?php

namespace App\Http;

use Illuminate\Foundation\Http\Kernel as HttpKernel;

class Kernel extends HttpKernel
{
    /**
     * Роутинг middleware, которые могут быть использованы по отдельности.
     *
     * @var array
     */
    protected $routeMiddleware = [
        // Добавь своё кастомное middleware здесь
        'roles' => \App\Http\Middleware\RolesMiddleware::class,
    ];
}
