<?php
// Clase Manicurista
class Manicurista {
    private $id_manicurista;
    private $nombre;
    private $experiencia;
    
    public function __construct($nombre, $experiencia) {
        $this->nombre = $nombre;
        $this->experiencia = $experiencia;
        $this->id = $id_manicurista;
    }
    

    
    public function getNombre() {
        return $this->nombre;
    }
    
    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }
    
    public function getExperiencia() {
        return $this->experiencia;
    }
    
    public function setExperiencia($experiencia) {
        $this->experiencia = $experiencia;
    }
    
    public function realizarManicura($cliente) {
        // Lógica para realizar la manicura
        echo "Realizando manicura para el cliente: " . $cliente->getNombre() . "<br>";
        echo "Manicurista: " . $this->nombre . "<br>";
        echo "Experiencia: " . $this->experiencia . " años<br>";
        echo "<br>";
    }
}

// Clase Cliente
class Cliente {
    private $nombre;
    
    public function __construct($nombre) {
        $this->nombre = $nombre;
    }
    
    // Método getter
    
    public function getNombre() {
        return $this->nombre;
    }
}



$manicurista = new Manicurista("María", 5);


$cliente1 = new Cliente("Laura");
$cliente2 = new Cliente("Ana");


$manicurista->realizarManicura($cliente1);
$manicurista->realizarManicura($cliente2);
?>
