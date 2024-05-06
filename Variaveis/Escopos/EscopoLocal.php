<?php

    //variável com o valor definido dentro de uma função e não acessada de fora
    //o valor é resetado quando a função chega ao fim

    $x = 5;

    echo "$x Global<br>";

    function test(){

        $x = 10;
        echo "$x Local<br>";

    }

    test();