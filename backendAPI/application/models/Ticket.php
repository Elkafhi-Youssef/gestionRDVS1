<?php

    class Profile{

        private $db = null;
        public function __construct(){
            $this->db = new Db();
        }
        public function getAllPostsUser($id){
            $this->db->prepareQuery("SELECT * FROM user
            INNER JOIN post
            ON user.id_user =post.id_user
            WHERE user.id_user = ?");
            $this->db->execute([$id]);
            return $this->db->getResult(); 
        } 
    }