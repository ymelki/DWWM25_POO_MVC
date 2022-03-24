<?php

// Routeur a developper ici ...
class Application {
    public static function run(){
        

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

    else if ($path=='/annonces'){
        include __DIR__.'/../src/Controller/AnnoncesController.php';
        $controller=new AnnoncesController();
        $controller->index(); //Renvoyer la vue du formulaire de connexion
    }

        
    }
}