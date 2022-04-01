<?php

    class Client{

        private $db = null;
        public function __construct(){
            $this->db = new Db();
        }

        // Get all users
        // public function getAllPosts($table){
        //     $this->db->prepareQuery("SELECT * FROM $table");
        //     $this->db->execute();
        //     return $this->db->getResult(); 
        // }

        public function addClient($data ){
            $this->db->insert("post",["title_film", "countryFilm", "descFilm", "genreFilm", "categoryFilm", "imageFilm","id_user"],$data);
        }

        public function updatePost($v1,$v2,$v3,$v4,$v5,$v6,$v7,$id){
            $this->db->prepareQuery("UPDATE `post` SET `title_film` = ?, `countryFilm` = ?, `descFilm` = ?,`genreFilm` = ?, `categoryFilm` = ?,`imageFilm` = ? ,`id_user` = ? WHERE `post`.`id_post` = ?");
            return $this->db->execute([$v1,$v2,$v3,$v4,$v5,$v6,$v7,$id]);
        }
        public function deletePost($id)
        {
           $this->db->prepareQuery("DELETE FROM post WHERE id_post = ?");
           $this->db->execute([$id]);
        }
        public function showPost($id){
            $this->db->prepareQuery("SELECT * FROM post
            where id_post =?");
           $this->db->execute([$id]);
            return  $this->db->getRow(); 
        }
      
        public function getCommets($id){
            $this->db->prepareQuery("SELECT user.Fullname,post.id_post,comment.id_comment,comment.descComment,comment.dateComment FROM user
            INNER JOIN comment   ON user.id_user = comment.id_user JOIN post on comment.id_post = post.id_post where post.id_post = ? ");
            $this->db->execute([$id]);
            return  $this->db->getResult(); 
        }
        public function addComment($data){
            $this->db->insert("comment",["descComment", "id_user", "id_post"],$data);
        }
    }