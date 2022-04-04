<?php
/**
 *  
 * This file contains the default contriller 'Home' with 
 * default method main 
 * 
 */

 // Home class
class Tickets extends Controller{
    

    public function __construct(){
        $this->setModelInstance('Ticket');
    }
    function getAllTickets(){
        $data = $this->modelInstance->getAllTickets();
           echo json_encode(array('message '=> 'success','data'=>$data));
       }
    // index : default method 
    public function index(){
    }

    public function logout(){
        unset($_SESSION["user_id"]);
        unset($_SESSION["email"]);
        unset($_SESSION["fullname"]);
    }

}