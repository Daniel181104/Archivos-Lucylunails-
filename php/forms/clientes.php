<?php

class Cliente {
    private $id_cliente;
    private $nombre;
    private $apellidos;
    private $correo;
    private $contrasena;
    private $fecha_nacimiento;

    public function __construct($id_cliente, $nombre, $apellidos, $correo, $contrasena, $fecha_nacimiento) {
        $this->id_cliente = $id_cliente;
        $this->nombre = $nombre;
        $this->apellidos = $apellidos;
        $this->correo = $correo;
        $this->contrasena = $contrasena;
        $this->fecha_nacimiento = $fecha_nacimiento;
    }

    public function registrar() {
    
    public function actualizar() {
    
    }

}
