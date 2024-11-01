<?php

$routeMiddleware = [//+
    // Other middleware...
    'auth.check' => \App\Http\Middleware\CheckIfAuthenticated::class,
];
?>