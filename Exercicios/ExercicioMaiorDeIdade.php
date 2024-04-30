<?php

    $pessoa =[
        'nome'=>'Matheus',
        'idade'=>17,
        'altura'=>1.75
    ];

    if ($pessoa['idade'] >= 18) {
        echo"$pessoa[nome] é maior de idade";
    }

    if ($pessoa['idade'] < 18) {
        echo"$pessoa[nome] é menor de idade";
    }
    