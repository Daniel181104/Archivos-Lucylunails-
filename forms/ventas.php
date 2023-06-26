<?php

class Venta {
    public $cod_venta;
    public $cant_servicios;

    public function __construct($cod_venta, $cant_servicios) {
        $this->cod_venta = $cod_venta;
        $this->cant_servicios = $cant_servicios;
    }

    public function confirmar_pago() {
    
        echo "Pago de la venta confirmado\n";
    }

    public function registrar_pago() {
        
        echo "Pago de la venta registrado\n";
    }

    public function finalizar_venta() {


        echo "Venta finalizada\n";
    }
}

// Ejemplo de uso:

$venta = new Venta('V001', 5);

$venta->confirmar_pago();
$venta->registrar_pago();
$venta->finalizar_venta();

?>
