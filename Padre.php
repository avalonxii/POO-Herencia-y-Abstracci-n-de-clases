<?php

// 1. para que una clase no se pueda instanciar a de ser una clase asbtracta
abstract class Padre{

    public $nombre;
    protected $unidades;
    private $precio;

    public function __construct(string $nombre,int $unidades, float $precio){
        $this->nombre=$nombre;
        $this->unidades=$unidades;
        $this->precio=$precio;
    }

    //2. El método saludar de Padre, 
    //pide un argumento para el nombre 
     //un mensaje en "cursiva" saludando a ese nombre.
    public function saludar(string $nombre){
        echo "<i>hola, ". $nombre."</i>";
    }

    //4. metodo Si le pasas un argumento  te muestra un mensaje 
    public function verTareas(string $tipo){

        if(strtolower($tipo) == "urgente"){
            echo "Tareas urgentes";
        }elseif(strtolower($tipo) == "importante"){
            echo "Tareas importantes";
        }else{
            echo "No hay tareas";
        }
    }

    
}