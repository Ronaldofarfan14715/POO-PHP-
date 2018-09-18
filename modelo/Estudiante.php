<?php 
require_once('Modelo.php');

class Estudiante extends Modelo{


    public $id;
    public $nombre;
    public $edad;



    public function read($id=''){

        $this->query= ($id != '')?"SELECT * FROM estudiante WHERE id=$id"
                                 :"SELECT * FROM estudiante";


        $this->get_query();

        $data = array();

        foreach($this->row as $key => $value){

            array_push($data, $value);
        }

        return $data;
    }

    





}
















?>