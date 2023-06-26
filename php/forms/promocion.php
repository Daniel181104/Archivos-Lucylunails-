<?php

class Promocion {
    public $cod_promo;
    public $descuento;
    public $procedimiento;
    public $fecha;

    public function __construct($cod_promo, $descuento, $procedimiento, $fecha) {
        $this->cod_promo = $cod_promo;
        $this->descuento = $descuento;
        $this->procedimiento = $procedimiento;
        $this->fecha = $fecha;
    }
}

function seleccionar_promocion($promociones) {


    return $promociones[0];
}

function seleccionar_hora() {

    return '10:00 AM';
}

function seleccionar_procedimiento() {


    return 'manicure';
}



$promocion1 = new Promocion('ABC123', 10, 'manicure', '2023-06-30');
$promocion2 = new Promocion('DEF456', 20, 'pedicure', '2023-07-15');
$promociones = array($promocion1, $promocion2);

$promocionSeleccionada = seleccionar_promocion($promociones);
$horaSeleccionada = seleccionar_hora();
$procedimientoSeleccionado = seleccionar_procedimiento();

echo "Promoción seleccionada: " . $promocionSeleccionada->cod_promo . "\n";
echo "Descuento: " . $promocionSeleccionada->descuento . "%\n";
echo "Procedimiento: " . $procedimientoSeleccionado . "\n";
echo "Fecha: " . $promocionSeleccionada->fecha . "\n";
echo "Hora seleccionada: " . $horaSeleccionada . "\n";

?>
