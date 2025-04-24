<?php
    namespace User\SimHimaInformatika\Http\Controllers;

    use User\SimHimaInformatika\App\Config;
    use User\SimHimaInformatika\App\Database;
    use User\SimHimaInformatika\App\View;
    use Exception; // Ensure to include Exception

    class ErrorController
    {
        function error404() {
            Config::loadEnv(); // Muat file .env
            $model = [
                'base_url' => Config::get('BASE_URL')
            ];

            View::render('error/error404', $model);
        }
        
        function error500() {
            Config::loadEnv(); // Muat file .env
            $model = [
                'base_url' => Config::get('BASE_URL')
            ];

            View::render('error/error500', $model);
        }
    }
?>