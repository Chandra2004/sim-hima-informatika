<?php
    namespace User\SimHimaInformatika\Database;

    use User\SimHimaInformatika\App\Database;

    abstract class Migration {
        protected Database $db;

        public function __construct()
        {
            $this->db = Database::getInstance();
        }

        abstract public function up();

        abstract public function down();
    }
?>
