<?php

    $float1 = 15.1;
    $float2 = 1.5;
    $float3 = 24.4;

    echo $float1;
    echo "<br>";

    echo $float2;
    echo "<br>";

    echo $float3;
    echo "<br>";

    echo is_float($float2);
    echo "<br>";

    if (is_float($float1)){
        echo "É float";
    }