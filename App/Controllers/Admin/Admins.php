<?php

namespace App\Controllers\Admin;
use \Core\View;
use App\Models\GestionCompte;

session_start();

class Admins extends \Core\Controller{
    
    protected function before(){
        
    }
    
    protected function indexAction(){
        View::renderTemplate('Admin/index.html',['name' => 'Saad','colors' => ['red','blue','green']]);
    }



}

?>