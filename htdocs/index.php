<?php

    // ini file public/index.php
    require_once __DIR__ . '/../vendor/autoload.php';

    use User\SimHimaInformatika\App\Config;

    use User\SimHimaInformatika\App\Router;
    use User\SimHimaInformatika\Middleware\AuthMiddleware;

    use User\SimHimaInformatika\Http\Controllers\HomeController;

    Config::loadEnv(); // Muat file .env
    
    Router::add('GET', '/', HomeController::class, 'index');
    Router::add('GET', '/user', HomeController::class, 'user');
    Router::add('GET', '/user/information/{id}', HomeController::class, 'detail');

    // Contoh Penggunaan Middleware
    // Router::add('GET', '/dashboard', DashboardController::class, 'homeDashboard', [AuthMiddleware::class]);
    Router::cacheRoutes();
    Router::run();
?>
