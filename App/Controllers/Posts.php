<?php

namespace App\Controllers;
use \Core\View;
use App\Models\Post;

class Posts extends \Core\Controller{
  
    protected function indexAction(){
        $posts = Post::getAll();
        View::renderTemplate('Posts/index.html',['posts' => $posts]);
    }
    
    protected function addNewAction(){
        $posts = array(
            array("Title"=>"Saad"),
            array("Title"=>"Reda"));
        View::renderTemplate('Posts/index.html',['posts' => $posts]);
    }
    
    protected function editAction(){
        echo "Hello this's <b>edit</b> function";
        echo "<p>Route parametres <pre>".htmlspecialchars(print_r($this->route_params,true))."</pre></p>";
    }
}

?>