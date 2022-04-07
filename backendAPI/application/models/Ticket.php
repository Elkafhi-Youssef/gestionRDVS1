<?php

    class Ticket{

        private $db = null;
        public function __construct(){
            $this->db = new Db();
        }
        public function getAllTickets(){
            $this->db->prepareQuery("SELECT * FROM users INNER JOIN rendezvous on users.reference= rendezvous.reference");
            $this->db->execute();
            return $this->db->getResult(); 
        }
    }