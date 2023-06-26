<?php
// Clase Producto
class Producto {
    private $id;
    private $tipo_servicio;
    private $nombre;
    private $precio;
    private $descripcion;
    
    public function __construct($id, $nombre, $precio, $descripcion,$tipo_servicio) {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->precio = $precio;
        $this->descripcion = $descripcion;
        $this.>tipo_serv = $tipo_servicio;
    }
    
    // Métodos getter y setter
    
    public function getId() {
        return $this->id;
    }
    
    public function getNombre() {
        return $this->nombre;
    }
    
    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }
    
    public function getPrecio() {
        return $this->precio;
    }
    
    public function setPrecio($precio) {
        $this->precio = $precio;
    }
    
    public function getDescripcion() {
        return $this->descripcion;
    }
    
    public function setDescripcion($descripcion) {
        $this->descripcion = $descripcion;
    }
}

//
class  {
    private $productos;
    
    public function __construct() {
        $this->productos = array();
    }
    
    public function agregarProducto(Producto $producto) {
        $this->productos[] = $producto;
    }
    
    public function eliminarProducto($id) {
        foreach ($this->productos as $key => $producto) {
            if ($producto->getId() == $id) {
                unset($this->productos[$key]);
                break;
            }
        }
    }
    
    public function obtenerTotal() {
        $total = 0;
        foreach ($this->productos as $producto) {
            $total += $producto->getPrecio();
        }
        return $total;
    }
    
    public function mostrarProductos() {
        foreach ($this->productos as $producto) {
            echo "ID: " . $producto->getId() . "<br>";
            echo "Nombre: " . $producto->getNombre() . "<br>";
            echo "Precio: " . $producto->getPrecio() . "<br>";
            echo "Descripción: " . $producto->getDescripcion() . "<br>";
            echo "<br>";
        }
    }
}

