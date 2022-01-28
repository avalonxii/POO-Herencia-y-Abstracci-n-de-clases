<?php
class Hijo extends Padre{

    public $ciudad="madrid";
    public $email="www";

    //3. por lo que parece no me deja sobrecargar el contructor por lo que tendria que hacerlo "a mano"
    public function __construct(string $ciudad){
        $this -> ciudad=$ciudad;
    }
    
    public function __construct1(string $ciudad, string $email){
        $this -> ciudad=$ciudad;
        $this -> email= $email;
    }

    public function mostrarCiudadEmail(){
        echo "<p>CIUDAD:".$this->ciudad."</p>".
        "<p>EMAIL:" . $this->email."</p>";    
    } 
}