<?php 

class Schools extends Controller
{

    public function index()
    {

        if(!Auth::logged_in()){

            $this->redirect('login');
            
        }
        
        $school=new School();

        $data=$school->findAll();
        
        $this->view('schools',['rows'=>$data]);
       
    }
}