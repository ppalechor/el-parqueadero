<?php
require_once 'Parqueadero.php';

$parqueadero = new Parqueadero();
$parqueadero->agregarCoche('NPC 05E', 'NISSA', 'BEIS', 'LAURA', '1084252981', '07:00', '12:00', 1, 5);
$parqueadero->agregarCoche('NPC 543', 'MASDA', 'NEGRO', 'JHON', '1084257232', '05:00', '07:00', 1, 5);
$parqueadero->agregarCoche('NPC 10A', 'TOYOTA', 'BLANCO', 'ANA', '1084252982', '08:00', '10:00', 1, 5);
$parqueadero->agregarCoche('NPC 11B', 'FORD', 'ROJO', 'MARIO', '1084252983', '09:00', '11:00', 1, 5);
$parqueadero->agregarCoche('NPC 12C', 'CHEVROLET', 'AZUL', 'CARLA', '1084252984', '10:00', '13:00', 1, 5);
$parqueadero->agregarCoche('NPC 13D', 'HONDA', 'VERDE', 'LUIS', '1084252985', '11:00', '14:00', 1, 5);
$parqueadero->agregarCoche('NPC 14E', 'BMW', 'GRIS', 'SANDRA', '1084252986', '12:00', '15:00', 1, 5);
$vehiculo = $parqueadero->buscarCoche('ABC123');
if ($vehiculo) {
    echo "Vehículo encontrado en el piso " . $vehiculo['piso'] . ", lugar " . $vehiculo['lugar'] . ": " . $vehiculo['marca'] . " " . $vehiculo['color'] . "\n";
} else {
    echo "Vehículo no encontrado.\n";
}

$valor = $parqueadero->calcularValor('ABC123');
echo "Valor a pagar: $" . $valor . " USD\n";
?>
