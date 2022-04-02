<?php


class Clients extends Controller
{

    public function __construct()
    {

        $this->setModelInstance('Client');
        
    }
    public function index()
    {
        $data=['name'=>'youssef'];
        echo json_encode(array('message '=> 'success',
        'data'=>$data));
        
        
    }
  function getAlluser(){
     $data = $this->modelInstance->getAlluser();
        echo json_encode(array('message '=> 'success','data'=>$data));
    }
    public function login()
    {
        if (($_SERVER['REQUEST_METHOD'] == 'POST')) {
            
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            //assciative arrays
            $data = [
                'email' => $_POST['email'],
                'password' => $_POST['password'],
                'error_email' => '',
                'error_password' => ''
            ];
            
            
            if (empty($data['email'])) {
                $data['error_email'] = 'Please fill your email';
            }
            if (empty($data['password'])) {
                $data['error_email'] = 'Please fill your password';
            }
            if (empty($data['email']) && empty($data['error_password']) && empty($data['user'])) {
                $password_err = 'Please fill your eamil and password and user type';
            }
            

            if (empty($email_err) && empty($password_err)) {
                $dt = $this->modelInstance->login($data['email'], $data['password']);
                if ($dt) {
                    $_SESSION['email'] = $data['email'];
                    $_SESSION['user_id'] = $dt['id_user'];
                    $_SESSION['fullname'] = $dt['Fullname'];
                } else {
                    //password incorrect
                    $data = [

                        'email_error' => 'password or email incorrect',
                        'password_error' => 'password or email incorrect',
                    ];
                    print_r($data);
                    
                }
            }
        } else {
            
        }
    }
}
