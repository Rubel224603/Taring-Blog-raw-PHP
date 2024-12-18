<?php


namespace App\classes;
use App\classes\TrainingBlog;


class Home{

    public function index(){
        //     foreach($this->trainingData as $data){
        //        echo $data["coursName"]." ";
        //        echo $data['instructor'];    

        //     }
        // 
        $this->courseDatas =  TrainingBlog::getAllCourse();// object & method calling
       return view('home', ['datas' => $this->courseDatas]);
   }

   public function readmore($id){

       $this->courseData =  TrainingBlog::getCourseId($id);
       return view('readmore', ['data' => $this->courseData]);
    
    }
 
    public  function form(){
        return view('form');
    }


}



















?>