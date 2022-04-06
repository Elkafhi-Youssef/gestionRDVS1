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

    public function deleteClient($id){
        $dt =  $this->modelInstance->deleteClient($id);
       if($dt){
        echo json_encode(array('message '=> 'success'));
       }
        
    }
    public function getClient($id){
        $dt =  $this->modelInstance->getClient($id);
       if($dt){
        echo json_encode(array('message '=> 'success','data'=>$dt));
       }
        
    }
    public function updateClient($id){
        $dt = json_decode(file_get_contents("php://input"));
        $var1 = $dt->Fullname;
        $var2 = $dt->CIN;
        $var3 = $dt->job;
        $var4 = $dt->age;
        $dt =  $this->modelInstance->updateClient($var1,$var2,$var3,$var4,$id);
        if($dt){
            echo json_encode(array('message '=> 'success','data'=>1));
           }else{
            echo json_encode(array('message '=> 'error','data'=>-1));
           }
        
        
    }
}
