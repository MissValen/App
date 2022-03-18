<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class controladorPrecios extends Controller {

    public function precios($opc){
        $descuento = 0;
        $valorTotal = 0;

        if (is_numeric($opc)) {

            if ($opc < 0){
                return 'El  valor ingresado es incorrecto. Inténtelo nuevamente';
            }

            elseif ($opc <= 100000){
                return 'Este producto no tiene descuento';
            }

            elseif ($opc>100000 && $opc <= 150000){
                $descuento = $opc*2/100;
                $valorTotal = $opc-$descuento;
                return 'El descuento del producto es del 2%, y el total a  pagar es: ' . $valorTotal;
            }

            elseif ($opc>150000 && $opc <= 300000){
                $descuento = $opc*3/100;
                $valorTotal = $opc-$descuento;
                return 'El descuento del producto es del 3%, y el total a  pagar es: ' . $valorTotal;
            }

            elseif ($opc>300000 && $opc <= 500000){
                $descuento = $opc*4/100;
                $valorTotal = $opc-$descuento;
                return 'El descuento del producto es del 4%, y el total a  pagar es: ' . $valorTotal;
            }

            elseif ($opc> 500000){
                $descuento = $opc*5/100;
                $valorTotal = $opc-$descuento;
                return 'El descuento del producto es del 5%, y el total a  pagar es: ' . $valorTotal;
            }

        }

        else {
            return 'Opcion no válida ';
        }
    }

    public function getIVA($art, $opc){

        define('IVA', 0.19);

        $precioIVA = ($opc * IVA);
        $totalIVA = $opc + $precioIVA;

        return 'El artículo '. $art .' sin IVA cuesta $'. $opc . ' y el precio del IVA es de '. $precioIVA . ' El  total a pagar por el artículo es de $'. $totalIVA;


    }
}
