<?php

    class Client{

        private $db = null;
        public function __construct(){
            $this->db = new Db();
        }

        // Get all users
        public function getAlluser(){
            $this->db->prepareQuery("SELECT * FROM user");
            $this->db->execute();
            return $this->db->getResult(); 
        }

        public function addClient($data ){
            $this->db->insert("post",["title_film", "countryFilm", "descFilm", "genreFilm", "categoryFilm", "imageFilm","id_user"],$data);
        }

        public function updatePost($v1,$v2,$v3,$v4,$v5,$v6,$v7,$id){
            $this->db->prepareQuery("UPDATE `post` SET `title_film` = ?, `countryFilm` = ?, `descFilm` = ?,`genreFilm` = ?, `categoryFilm` = ?,`imageFilm` = ? ,`id_user` = ? WHERE `post`.`id_post` = ?");
            return $this->db->execute([$v1,$v2,$v3,$v4,$v5,$v6,$v7,$id]);
        }
        public function deleteClient($id)
        {
           $this->db->prepareQuery("DELETE FROM user WHERE user_id = ?");
           return $this->db->execute([$id]);
        }
      
        public function getClient($id)
        {
           $this->db->prepareQuery("SELECT *  FROM user WHERE user_id = ?");
           $this->db->execute([$id]);
           return $this->db->getRow(); 
        }
        public function updateClient($var1,$var2,$var3,$var4,$id)
        {
           $this->db->prepareQuery("UPDATE `user` SET `Fullname` = ?, `CIN` = ?, `job` = ?,`age` = ? WHERE user_id= ?");
           return $this->db->execute([$var1,$var2,$var3,$var4,$id]); 
        }
        
       
    }