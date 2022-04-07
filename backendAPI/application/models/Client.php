<?php

    class Client{

        private $db = null;
        public function __construct(){
            $this->db = new Db();
        }

        // Get all users
        public function getAlluser(){
            $this->db->prepareQuery("SELECT * FROM users");
            $this->db->execute();
            return $this->db->getResult(); 
        }

        public function addClient($data ){
            $this->db->insert("post",["title_film", "countryFilm", "descFilm", "genreFilm", "categoryFilm", "imageFilm","id_user"],$data);
        }

        public function deleteClient($id)
        {
           $this->db->prepareQuery("DELETE FROM users WHERE reference = ?");
           return $this->db->execute([$id]);
        }
      
        public function getClient($id)
        {
           $this->db->prepareQuery("SELECT *  FROM users WHERE reference = ?");
           $this->db->execute([$id]);
           return $this->db->getRow(); 
        }
        public function updateClient($var1,$var2,$var3,$id)
        {
           $this->db->prepareQuery("UPDATE `users` SET `firstname` = ?, `Cin` = ?, `age` = ? WHERE reference= ?");
           return $this->db->execute([$var1,$var2,$var3,$id]); 
        }
        
       
    }