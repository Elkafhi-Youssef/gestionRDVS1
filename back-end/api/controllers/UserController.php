<?php

// include_once '../Database/DB.php';
// include_once '../models/User.php';

class UserController //UtilisateurController
{

    public function addUser() //ajouterUtil
    {
        header('Access-Control-Allow-Origin: *');
        header('Content-Type: application/json');
        header('Access-Control-Allow-Methods: POST');
        header('Access-Control-Allow-Headers: Access-Control-Allow-Headers,Content-Type,Access-Control-Allow-Methods, Authorization, X-Requested-With');
        $data = json_decode(file_get_contents("php://input"));
        $user = new User();
        $ref = $this->nbru($data->Cin); // add random number to 
        $user->setReference($ref);
        $user->setFirstName($data->firstname);
        $user->setLastName($data->Cin);
        $user->setAge($data->age);
        $tab = array("reference" => $ref,   "firstname" => $data->firstname, "Cin" => $data->Cin, "age" => $data->age);
        $user->addUser($tab);
        echo json_encode($tab);
    }


    public function nbru($Cin)  // generate random number
    {
        $user = new User();
        $nb = $user->count();
        $ran = rand();
        return $Cin . $nb['nb'] . $ran;
    }

    public function Signin($ref)
    {
        header('Access-Control-Allow-Origin: *');
        header('Content-Type: application/json');
        header('Access-Control-Allow-Methods: GET');
        $user = new User();
        $user->setReference($ref);
        $u = $user->Signin($ref);
        echo json_encode($u);
    }
}