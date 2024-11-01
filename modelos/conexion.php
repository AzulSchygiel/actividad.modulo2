
<?php
class Conexion{
    static public function conectar(){
        $link = new PDO("mysql:host=localhost;dbname=cursoutn", "estudiante", "test"); 
        $link->exec("set names utf8");

        return $link;
    }
}