<?php

class Pago {
    public $total;

    public function __construct($total) {
        $this->total = $total;
    }

    public function imprimir_recibo() {
        

        echo "Recibo de pago\n";
        echo "Total: " . $this->total . "\n";
    }

    public function realizar_pago() {


        echo "Pago realizado\n";
    }

    public function confirmar_pago() {


        echo "Pago confirmado\n";
    }
}


$pago = new Pago(100.0);

$pago->imprimir_recibo();
$pago->realizar_pago();
$pago->confirmar_pago();

?>
