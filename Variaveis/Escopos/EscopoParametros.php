<?php

    //também são considerados variáveis
    //valores dinâmicos que podem ser alterados a cada invocação da func

    function soma($a, $b){
        echo $a + $b;
        echo "<br>";
    }

    soma(10, 5);
    soma(0, 10);
    soma(100, 2);