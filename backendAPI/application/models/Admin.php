<?php

    class Admin{

        private $db = null;
        public function __construct(){
            $this->db = new Db();
        }

        // Get all users
        public function login($var1,$var2){
            $this->db->prepareQuery("SELECT * FROM admin where email = ? and password = ?");
            $this->db->execute([$var1,$var2]);
            return $this->db->getRow(); 
        }
      
    }