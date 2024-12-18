<?php


namespace App\classes;


class LargeNumber{

    public $firstNumber , $secondNumber, $thirdNumber, $result;

    public function  __construct($post)
    {
        $this->firstNumber=$post['first_number'];
        $this->secondNumber=$post["second_number"];
        $this->thirdNumber =$post["third_number"];


    }

    public function index(){
    
    $this->result = $this->check();
    
    header("Location:web.php?page=form&&result=$this->result");
}

    public function check()
    {
        if($this->firstNumber > $this->secondNumber && $this->thirdNumber ){
            $this->result = $this->firstNumber;
            return $this->result;
    
        }
        elseif($this->secondNumber > $this->firstNumber && $this->thirdNumber ){
            $this->result = $this->secondNumber;
            return $this->result;
        }
        else{
            $this->result = $this->thirdNumber;
            return $this->result;
        }
    }


}















?>