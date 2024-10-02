<?php
class Parqueadero {
    private $coche = [];

    public function agregarCoche($placa, $marca, $color, $nombre, $documento, $horaIngreso, $horaSalida, $piso, $lugar) {
        $this->coche[$placa] = [
            'placa' => $placa,
            'marca' => $marca,
            'color' => $color,
            'nombre' => $nombre,
            'documento' => $documento,
            'horaIngreso' => $horaIngreso,
            'horaSalida' => $horaSalida,
            'piso' => $piso,
            'lugar' => $lugar
        ];
    }

    public function buscarCoche($placa) {
        return isset($this->coche[$placa]) ? $this->coche[$placa] : null;
    }

    public function calcularValor($placa) {
        if (isset($this->coche[$placa])) {
            $vehiculo = $this->coche[$placa];
            $horaIngreso = strtotime($vehiculo['horaIngreso']);
            $horaSalida = strtotime($vehiculo['horaSalida']);
            $horas = ($horaSalida - $horaIngreso) / 3600;
            return $horas * 2; 
        }
        return 0;
    }
}
?>