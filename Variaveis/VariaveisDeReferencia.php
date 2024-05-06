<?php

    //variável com referência a outra
    //usamos o símbolo &
    //ao mudar o valor da variável de referência, a referenciada também muda e vice-versa

    $x = 10;

    $y =& $x;

    echo $x;
    echo "<br>";
    echo $y;
    echo "<br>";

    $y = 15;

    echo $x;
    echo "<br>";
    echo $y;
    echo "<br>";