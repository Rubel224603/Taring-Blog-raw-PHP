<?php

namespace App\classes;

class TrainingBlog{

   // public $trainingName ="Web Development";

  //  public function course(){
   //     return $this->trainingName;
   // }



  

  public static $trainingCourses = [];
  public static function  getAllCourse()
  
  {

    self::$trainingCourses= [
 

            "1"=>[  
                    "id"=>1,
                    "image"     => "assets/img/card.jpeg",
                    "coursName" => "Web Developement",
                    "instructor"=>  "Rubel Hosen",
                    "duration"  =>  "six month",
                    "resdiential"=> "Yes",
                    "startDate" =>  "10/09/2024",
                    "endDate"   =>  "06/03/2024"
                ],
            
            "2"=>[  
                    "id"=>2,
                    "image"     => "assets/img/graphics.jpg",
                    "coursName"  =>"Graphics Developement",
                    "instructor" => "Imran mahmood",
                    "duration"   =>"six month",
                    "resdiential"=>"Yes",
                    "startDate"  => "10/09/2024",
                    "endDate"    =>"06/03/2024"
                ],
            
                "3"=>[
                    "id"        =>  3,
                    "image"     => "assets/img/card2.jpeg",
                    "coursName" => "Digtital Marketing",
                    "instructor"=>  "Rubel Hosen",
                    "duration"  =>  "six month",
                    "resdiential"=> "Yes",
                    "startDate" =>  "10/09/2024",
                    "endDate"   =>  "06/03/2024"
                ],
            
            
                "4"=>[
                    "id"=>4,
                    "image"     => "assets/img/card3.webp",
                    "coursName" => "Food & Beviourious",
                    "instructor"=>  "Bridge & Sojib",
                    "duration"  =>  "six month",
                    "resdiential"=> "Yes",
                    "startDate" =>  "10/09/2024",
                    "endDate"   =>  "06/03/2024"
                ],
            
                "5"=>[
                    "id"=>5,
                    "image"     => "assets/img/card.jpeg",
                    "coursName" => "Food & Beviourious",
                    "instructor"=>  "Bridge & Sojib",
                    "duration"  =>  "six month",
                    "resdiential"=> "Yes",
                    "startDate" =>  "10/09/2024",
                    "endDate"   =>  "06/03/2024"
                ],
                "6"=>[
                    "id"=>6,
                    "image"     => "assets/img/card.jpeg",
                    "coursName" => "Food & Beviourious",
                    "instructor"=>  "Bridge & Sojib",
                    "duration"  =>  "six month",
                    "resdiential"=> "Yes",
                    "startDate" =>  "10/09/2024",
                    "endDate"   =>  "06/03/2024"
                ]
    
         ];

 

         return self::$trainingCourses;

        }  
       


        public static function getCourseId($id){
            foreach(self::getAllCourse() as $course){
                if($course['id']==$id){
                    return $course;
                    break;
                }
            }
        }


}
























?>