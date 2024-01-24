<?php 

class Home extends Controller
{

    public function index()
    {

        // $user=$this->load_model('User');

        $user=new User();

        // $arr['firstname'] = 'marcos';
        // $arr['lastname'] = 'perez';
        // $arr['date'] = '2024-01-11 20:19:08';
        // $arr['user_id'] = 'fsdfsd';
        // $arr['gender'] = 'male';
        // $arr['school_id'] = 'fdsfsd';
        // $arr['nivel'] = 'admin';

        // $user->delete(4);
        $data=$user->findAll();
        
        $this->view('home',['rows'=>$data]);
       
    }
}