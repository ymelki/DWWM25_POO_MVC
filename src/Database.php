<?php

class Database {


    public static function getPdo(){
        return  new PDO('mysql:host=localhost;dbname=bd_annonce', 'root','');
    }
    
}