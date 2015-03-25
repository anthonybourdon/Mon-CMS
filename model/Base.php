<?php

    class Base {

        private $_db;

        public function __construct() {
            //acces par PDO
            $source = "mysql:host=" . DB_SERVER . ";dbname=" . DB_NAME;

            $this->_db = new PDO($source, DB_USER, DB_PASSWORD);
            $this->_db->exec("SET CHARACTER SET utf8");
            $this->_db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }

        public function get_db(){
            return $this->_db;
        }
    }

?>