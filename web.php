<?php

require_once "vendor/autoload.php";
use App\classes\LargeNumber;
use App\classes\Home;




$homeObj= new Home();

if(isset($_GET['page']))
{
    if($_GET['page']=='home'){
        $homeObj->index();
    }
        elseif($_GET['page']=='readmore'){

        $homeObj->readmore($_GET["id"]);

    }
        elseif($_GET['page']=='form')
    {
        $homeObj->form();
    }

}
elseif(isset($_POST['calculator_btn'])){

    $calculator = new LargeNumber($_POST);

    $calculator->index();
}

























