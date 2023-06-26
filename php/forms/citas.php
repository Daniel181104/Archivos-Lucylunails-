<?php

class agendamiento {
    private $horarioDisponible;
    private $citasProgramadas;
    

    public function __construct(){
    $this->aceptarCita = array();
    $this->agregarAgenda = array();
    }

    public function __construct() {
        $this->horarioDisponible = array();
        $this->citasProgramadas = array();
    }
    
    public function agregarHorarioDisponible($hora) {
        $this->horarioDisponible[] = $hora;
    }
    
    public function programarCita($cliente, $hora) {
       
        if (in_array($hora, $this->horarioDisponible)) {
            $this->citasProgramadas[$hora] = $cliente;
            echo "Cita programada para el cliente: " . $cliente . "<br>";
            echo "Hora: " . $hora . "<br>";
            echo "<br>";
        } else {
            echo "La hora seleccionada no está disponible.<br>";
            echo "<br>";
        }
    }
    
    public function cancelarCita($hora) {
        if (isset($this->citasProgramadas[$hora])) {
            unset($this->citasProgramadas[$hora]);
            echo "Cita cancelada para la hora: " . $hora . "<br>";
            echo "<br>";
        } else {
            echo "No se encontró ninguna cita programada para la hora especificada.<br>";
            echo "<br>";
        }
    }
    
    public function mostrarCitasProgramadas() {
        foreach ($this->citasProgramadas as $hora => $cliente) {
            echo "Hora: " . $hora . "<br>";
            echo "Cliente: " . $cliente . "<br>";
            echo "<br>";
        }
    }
}



?>
