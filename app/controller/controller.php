<?php
namespace App\Controller;

use App\Core;
use App\Model;
use App\Utility;

class Controller{

   function view($viewName,$params=[]){
       AppSystem::$appSystem->router->view($viewName,$params);
   }

}
?>