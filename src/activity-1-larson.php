<?php
/*
    Parte 1: Lógica de Programación y Algoritmos
    Ejercicio:
    Problema: Dado un arreglo de enteros desordenados, encuentra los 3 números más grandes y ordénalos de mayor a menor.
    Condiciones:
    · Si el arreglo tiene menos de 3 elementos, devuelve un mensaje de error.
    · No utilices funciones de ordenamiento nativas como sort() o rsort().
    Entrada:
    $arr = [10, 4, 3, 50, 23, 90];
    Salida esperada:
    [90, 50, 23]
    Video: https://drive.google.com/file/d/1MCQWgcE135kwXdA3Y5SgmFaB9XFxXYBa/view?usp=drive_link
*/
function findThreeNumbers($nums) {
   
    if (count($nums) < 3) {
        return 'Error: El arreglo debe de contener la menos tres numeros';
    }
    $first = 0;
    $second = 0;
    $third = 0;

    foreach($nums as $num) {
       
        if ($num > $first) {
            $third = $second;
            $second = $first;
            $first = $num;
        } elseif ($num > $second) {
            $third = $second;
            $second = $num;
        } elseif ($num > $third) {
            $third = $num;
        }
    }
    return [$first, $second, $third];
}

$arr = [10, 4, 3, 50, 23, 90];

$result = findThreeNumbers($arr);
print_r($result);