<?php
/**
 * User Model
 */

 class User extends Model{

    protected $beforeInsert=[
        'make_user_id',
        'make_school_id',
        'hash_password'
    ];

    protected $allowedColumns=[
        'firstname',
        'lastname',
        'email',
        'gender',
        'nivel',
        'password',
        'date',
    ];
      
    public function validate($data){

        $this->errors=array();
        // comprobando el firstname
        if(empty($data['firstname']) || !preg_match('/^[a-zA-Z]+$/',$data['firstname'])){
            $this->errors['firstname']="Only letters allowed in first name";
        }
        // check for lastname
        if(empty($data['lastname']) || !preg_match('/^[a-zA-Z]+$/',$data['lastname'])){
            $this->errors['lastname']="Only letters allowed in last name";
        }

        // check for email
        if(empty($data['email']) || !filter_var($data['email'],FILTER_VALIDATE_EMAIL)){
            $this->errors['email']="Email is not valid";
        }

        // check for password
        if(empty($data['password']) || $data['password']!==$data['password2']){
            $this->errors['password']="The password do not match";
        }

        // check if email exists
         if($this->where('email',$data['email'])){
            $this->errors['password']="That email is already in use";
        }

        // check for password length
        if(strlen($data['password'])< 8){
            $this->errors['password']="Password must be at least 8 characters long";
        }

        // check for gender
        $genders=['female','male'];
        if(empty($data['gender']) || !in_array($data['gender'],$genders)){
            $this->errors['gender']="Gender is not valid";
        }

         // check for nivel
         $nivels=['student','reception','lecturer','admin','super_admin'];
         if(empty($data['nivel']) || !in_array($data['nivel'],$nivels)){
             $this->errors['nivel']="Nivel is not valid";
         }


        if(count($this->errors)==0){
            return true;
        }
        return false;
   }


   public function make_user_id($data){

        $data['user_id']=random_string(60);
        return $data;
   }

   public function make_school_id($data){
        if(isset($_SESSION['USER']->school_id)){
            $data['school_id']=$_SESSION['USER']->school_id;
        }
        return $data;
    }

    public function hash_password($data){
        $data['password']=password_hash($data['password'],PASSWORD_DEFAULT);
        return $data;
    }

  
 }