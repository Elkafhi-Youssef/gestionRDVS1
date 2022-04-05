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
        // public function login($email, $password){
        //     $this->db->prepareQuery("SELECT password FROM admin where email = ? ");
        //     $this->db->execute([$email]);
        //     $row = $this->db->getRow();
        //     $hashed_password = $row['password'];
        //     // if(password_verify($password, $hashed_password)){
        //     if($password== $hashed_password){
        //       return $row;
        //     } else {
        //       return 0;
        //     }
        //   }
    }