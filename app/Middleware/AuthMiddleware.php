<?php
    namespace User\SimHimaInformatika\Middleware;

    use User\SimHimaInformatika\App\Config;

    class AuthMiddleware implements Middleware {
        function before()
        {
            session_start();
            if (!isset($_SESSION['user_id'])) {
                header('location: ' . Config::get('BASE_URL') . '/login');
                exit();
            }
        }
    }
?>
