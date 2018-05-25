<?php

namespace App\Controllers;
use \Core\View;

class Home extends \Core\Controller{
    
    protected function before(){
        //echo "(Before)";
    }
    
    protected function after(){
        //echo "(After)";
    }
    
    public function indexAction(){
        //echo " Hello from the index action in Home Controller";
        //View::render('Home/index.php',['name' => 'Saad','colors' => ['red','blue','green']]);
        View::renderTemplate('Home/index.html',['name' => 'Saad','colors' => ['red','blue','green']]);
    }
}

?>