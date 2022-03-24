<?php
class AnnoncesController {
    public function index(){

        
        // test de la BD
        echo "test";
        include __DIR__.'/../../src/Entity/Annonce.php';
        $a=new Annonce();
        $a->findAll();
        
        include __DIR__.'/../../templates/Annonce.php';
    }
}