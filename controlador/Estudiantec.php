<?php 


require_once('modelo/Estudiante.php');

Class EstudianteController{

    private $modelo;



    public function __construct(){
        $this->modelo= new Estudiante();
    }



    public function read($id = ''){
        return $this->modelo->read($id);
    }



}








?>