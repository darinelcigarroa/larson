<?php
/*
    Parte 3: Refactorización + Análisis de Código
    Ejercicio:
    Problema: Revisa y refactoriza el siguiente fragmento de código para mejorar su legibilidad, rendimiento y mantenimiento:

    function processNumbers($nums) {

    $result = [];

    for ($i = 0; $i < count($nums); $i++) {

    if ($nums[$i] % 2 == 0) {

    array_push($result, $nums[$i] * 2);

    } else {

    array_push($result, $nums[$i] * 3);

    }

    }

    return $result;

    }


    Tareas:

    · Refactoriza el código para optimizar el procesamiento.

    · Agrega validaciones para asegurarse de que la entrada es un array de números.

    · Crea pruebas unitarias para diferentes casos de entrada.

    · Subir el código en un repositorio de GitHub y enviar en enlace al evaluador.
*/

function processNumbers($nums)
{
    if (empty($nums))  {
        return 'El array no puedo estar vacio' . "</br>";
    }

    foreach($nums as $num) {
        if(!is_numeric($num)) {
            return "El elemento $num no es numerico" . "</br>";
        }
    }
    
    return array_map(fn($num) => $num % 2 == 0 ? $num * 2 : $num * 3, $nums);
}


function testProcessNumbers() {
    try {
        assert(processNumbers([1,2,3]) === [3,4,9]);       
        assert(processNumbers([0,-1,-2]) === [0,-3,-4]);       
        assert(processNumbers([10,73,15]) === [20,219,45]);

        echo "Las pruebas pasaron correctamente" . "</br>";

    } catch (\Throwable $th) {
        echo "Error en las pruebas" . "</br>";
    }
}

testProcessNumbers();

// Probar validaciones
$array = []; 
print_r(processNumbers($array));
$array = [1, 'darinel', 10]; 
print_r(processNumbers($array));
