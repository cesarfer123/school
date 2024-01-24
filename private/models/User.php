<?php
/**
 * User Model
 */

 class User extends Model{

      
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

        // check for gender
        $genders=['female','male'];
        if(empty($data['gender']) || !in_array($data['gender'],$genders)){
            $this->errors['gender']="Gender is not valid";
        }

         // check for gender
         $nivels=['student','reception','lecturer','admin','super_admin'];
         if(empty($data['nivel']) || !in_array($data['nivel'],$nivels)){
             $this->errors['nivel']="Nivel is not valid";
         }


        if($data['password']!=$data['password2']){
            $this->errors['password']="The password do not match";
        }

        if(count($this->errors)==0){
            return true;
        }
        return false;
   }
 }