<?php


    class Users extends Controller{


        public function __construct(){
            // Load and instatiate the book model
            $this->setModelInstance('posts');
        }
        //  function index call of all books
        public function index(){
            
        }
        public function addPost()
        {
            if ($_SERVER['REQUEST_METHOD'] == 'POST'  )
             {
                $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
                $data = [
                    'title_film' => $_POST['title'],
                    'country' => $_POST['country'],
                    'description' => $_POST['description'],
                    'genre' => $_POST['genre'],
                    'category' => $_POST['category'],
                    'image'=>$_FILES['image']['name'],
                    'id_user' => $_POST['id_user']
                ];
                $distination = ROOT.DS.'public'.DS.'upload'.DS.$data['image'];
                move_uploaded_file($_FILES['image']['tmp_name'],$distination);
                
                // ["title_film", "countryFilm", "descFilm", "genreFilm", "categoryFilm", "image","id_user"]
                print_r($data);
                print_r($_FILES['image']);
                
                $dt = $this->modelInstance->addPost([$data['title_film'] ,$data['country'],$data['description'],$data['genre'],$data['category'],$data['image'],$data['id_user']]);
                if ($dt) {
                    
                    echo "i'm here";
                }else {
                        
                    }
            } 
    }       






        public function deletePost($id){
            $this->modelInstance->deletePost($id);
            $this->redirect(URLROOT .'/profileC/getAllPostsUser/1');
        }
        public function showPost($id){
            $dataPost =$this->modelInstance->showPost($id);
            $dataComment =$this->modelInstance->getCommets($id);
            $data = [$dataPost,$dataComment];
            // echo "<pre>";
            // print_r($data[0]);
            // echo "<pre>";
            // print_r($data[1]);
            $this->loadView('user/post',$data);
        }
        public function updatePost($id)
        {
            if ($_SERVER['REQUEST_METHOD'] == 'POST'  )
             {
                $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
                $data = [
                    'title_film' => $_POST['title'],
                    'country' => $_POST['country'],
                    'description' => $_POST['description'],
                    'genre' => $_POST['genre'],
                    'category' => $_POST['category'],
                    'image'=>$_FILES['image']['name'],
                    'id_user' => $_POST['id_user']
                ];
                // print_r($data);
                $distination = ROOT.DS.'public'.DS.'upload'.DS.$data['image'];
                move_uploaded_file($_FILES['image']['tmp_name'],$distination);
                
                // ["title_film", "countryFilm", "descFilm", "genreFilm", "categoryFilm", "image","id_user"]
                // print_r($data);
                // print_r($_FILES['image']);
                
                $dt = $this->modelInstance->updatePost($data['title_film'],$data['country'],$data['description'],$data['genre'],$data['category'],$data['image'],$data['id_user'],$id);
                // var_dump($dt);
                // die();
                if ($dt) {
                    $this->redirect(URLROOT .'/post/showPost/'.$id);
                }else {
                    echo "i'm here";
                        // $this->redirect(URLROOT .'/profileC/getAllPostsUser');
                    }
            }else{
                $dataPost = $this->modelInstance->showPost($id);
                // print_r($dataPost);
                $this->loadView('user/editPost',$dataPost);
            }
    }    
     public function addComment($id){
        if ($_SERVER['REQUEST_METHOD'] == 'POST'  )
        {
           $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
           $data = [
               'comment' => $_POST['comment'],
               'id_user' => $_POST['id_user'],
               'id_post' => $id,
               
           ];
           print_r($data);
           $ex =$this->modelInstance->addComment([$data['comment'],$data['id_user'],$data['id_post']]);
        //    if($ex){

        //        die('done');
        //    }else{
        //        die('not done');
        //    }
        $this->redirect(URLROOT .'/post/showPost/'.$id);
    }
    //     public function getPatient($id){      
    //         $data = $this->modelInstance->getpatient($id);
    //         print_r($data);
    //         $this->loadView('admin'.DS.'editPatient',$data);
    //         // $this->loadView('test',$data);
    //     }

    //     public function modifyPatient($id){
    //         // && isset($_POST['submit'])
    //         if ($_SERVER['REQUEST_METHOD'] == 'POST'  ) {
    //             $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
    //             $data = [
    //                 'fn_Patient' => $_POST['fullname'],
    //                 'email_patient' => $_POST['gmail'],
    //                 'passwod' => $_POST['password'],
    //                 'date_birth' => $_POST['date'],
    //                 'type_sickness' => $_POST['sickness'],
    //                 'id_patient'=>$id
    //             ];
               
    //             print_r($data);
    //             $dt = $this->modelInstance->updatePatient($data['fn_Patient'] ,$data['email_patient'],$data['passwod'],$data['date_birth'],$data['type_sickness'],$data['id_patient']);
    //             echo "i'm here";
    //                 if ($dt) {
                       
    //                     $this->redirect(URLROOT . '/AdminPatient/getAllPatients');
    //                 } else {
                  
    //                     $this->redirect(URLROOT . '/AdminPatient/getPatient'.$data['id_patient']);
    //         }
    //      }
    //    }
    }}
    ?>