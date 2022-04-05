<?php


class Admins extends Controller
{

    public function __construct()
    {

        $this->setModelInstance('Admin');
        
    }
   
    public function login()
    {
        if (($_SERVER['REQUEST_METHOD'] == 'POST')) {
            
            $data = json_decode(file_get_contents("php://input"));
            $check =$this->modelInstance->login($data->email, $data->password);
            // echo json_encode(array('message '=> 'success','data'=>$check));
            // return;
            if ($check > 0) {
                echo json_encode(array('data'=>$check['admin-id']));
            } else{
                echo json_encode(array('data'=>-1));
            }
        }
}
}
