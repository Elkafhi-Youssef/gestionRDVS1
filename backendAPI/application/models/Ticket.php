<?php

    class Ticket{

        private $db = null;
        public function __construct(){
            $this->db = new Db();
        }
        public function getAllTickets(){
            $this->db->prepareQuery("SELECT * FROM user INNER JOIN booking on user.user_id= booking.user_id");
            $this->db->execute();
            return $this->db->getResult(); 
        }
    }