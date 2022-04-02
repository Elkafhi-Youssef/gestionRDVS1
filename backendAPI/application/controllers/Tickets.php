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