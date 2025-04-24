<?php
    namespace User\SimHimaInformatika\app;

    class View {
        public static function render(string $view, $model)
        {
            require dirname(__DIR__, 2) . '/resources/Views/' . $view . '.php';
        }
    }
?>