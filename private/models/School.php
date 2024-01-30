<?php
/**
 * School Model
 */

 class School extends Model{

    protected $beforeInsert=[
        'make_user_id',
        'make_school_id',
    ];

    protected $allowedColumns=[
        'school',
        'date',
       
    ];
      
    public function validate($data){

        $this->errors=array();
        // comprobando school
        if(empty($data['school']) || !preg_match('/^[a-zA-Z]+$/',$data['school'])){
            $this->errors['school']="Only letters allowed in school";
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
        $data['school_id']=random_string(60);
        return $data;
    }
 
    
 }