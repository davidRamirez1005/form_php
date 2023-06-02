<?php

date_default_timezone_set("America/Bogota");

function fecha_espanol_larga(){
    $fecha_dia = date("d");
    $fecha_mes = date("m");
    $fecha_year = date("y");

    $dia_semana = [
        "Monday" => "Lunes",
        "Tuesday" => "Martes",
        "Wednesday" => "Miercoles",
        "Thursday" => "Jueves",
        "Friday" => "Viernes",
        "Saturday" => "Sabado",
        "Sunday" => "Domingo"
    ];

    $meses_year = [
        '01' => 'Enero',
        '02' => 'Febrero',
        '03' => 'Marzo',
        '04' => 'Abril',
        '05' => 'Mayo',
        '06' => 'Junio',
        '07' => 'Julio',
        '08' => 'Agosto',
        '09' => 'Septiembre',
        '10' => 'Octubre',
        '11' => 'Noviembre',
        '12' => 'Diciembre'
    ];

     $fecha_final = $dia_semana[date("l")]." ".$fecha_dia." de ".$meses_year[$fecha_mes]." de ".$fecha_year;

    return $fecha_final;
}

echo "<br>";

function fecha_espanol_corta($fecha = ""){

    if ($fecha == "") {
        $fecha = date("d-m-y");
    } else {
        $fecha = date("d-m-y",strtotime($fecha));
    }
    $fecha = explode("-",$fecha);

    $fecha_dia = $fecha[0];
    $fecha_mes = $fecha[1];
    $fecha_year = $fecha[2];



    $meses_year = [
        '01' => 'Enero',
        '02' => 'Febrero',
        '03' => 'Marzo',
        '04' => 'Abril',
        '05' => 'Mayo',
        '06' => 'Junio',
        '07' => 'Julio',
        '08' => 'Agosto',
        '09' => 'Septiembre',
        '10' => 'Octubre',
        '11' => 'Noviembre',
        '12' => 'Diciembre'
    ];

    $fecha_final = $fecha_dia." de ".$meses_year[$fecha_mes]." de ".$fecha_year;

    return $fecha_final;
}

?>