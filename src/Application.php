<?php

// Routeur a developper ici ...
class Application {
    public static function run(){
        echo "je lance l'appli";
        

    if (!isset($_SERVER['PATH_INFO'])) {
        $path="";
    }

    if (isset($_SERVER['PATH_INFO'])) {
        $path=$_SERVER['PATH_INFO'];
    }


    if ($path==''){
        include __DIR__.'/../src/Controller/HomeController.php';
        $controller=new HomeController();
        $controller->index(); //Renvoyer la vue du formulaire de connexion
    }

        
    }
}