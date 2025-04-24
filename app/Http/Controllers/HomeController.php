<?php
    namespace User\SimHimaInformatika\Http\Controllers;

    use User\SimHimaInformatika\App\Config;
    use User\SimHimaInformatika\App\Database;
    use User\SimHimaInformatika\App\View;

    use User\SimHimaInformatika\Models\HomeModel;

    use Exception;

    class HomeController {
        function index() {
            Config::loadEnv();
            try {
                $db = Database::getInstance();
                $status = "success";
            } catch (Exception $e) {
                $status = $e->getMessage();
            }

            $model = [
                'status' => $status,
                'base_url' => Config::get('BASE_URL')
            ];

            View::render('include/navbar', $model);
            View::render('home/home', $model);
            View::render('home/footer', $model);
        
        
        }

        function user() {
            Config::loadEnv(); // Muat file .env
            
            $homeModel = new HomeModel();
            $data = $homeModel->getUserData();

            try {
                $db = Database::getInstance();
                $status = "success";
            } catch (Exception $e) {
                $status = $e->getMessage();
            }

            $model = [
                'userData' => $data['users'],
                'status' => $status,
                'base_url' => Config::get('BASE_URL')
            ];

            View::render('interface/user', $model);
        
        }

        function detail(string $id) {
            Config::loadEnv(); // Muat file .env
            
            $homeModel = new HomeModel();
            $data = $homeModel->getUserData();

            $userDetail = $homeModel->getUserDetail($id);

            $model = [
                'userData' => $data['users'],
                'user' => $userDetail,
                'base_url' => Config::get('BASE_URL')
            ];

            View::render('interface/detail', $model);
        
        }
    }
?>