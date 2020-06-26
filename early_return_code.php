<?php

function calculaBonus($salario) : double {
    $bonus = 0.0;

    if (! is_null($salario)) {
        if ($salario <= 2000) {
            $bonus = $salario * 0.1;
        } elseif ($salario > 2000 && $salario <= 4000) {
            $bonus = $salario * 0.2;
        } else {
            $bonus = $salario * 0.25;
        }
    }

    return $bonus;
}
