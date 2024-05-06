<?php

    //é declarada com a palavra "static"
    //seu valor não é resetado quando a função acaba

    function teste() {

        $a = 0;
        $a++;

        echo "$a<br>";

    }

    teste();
    teste();
    teste();

    function testeStatic() {

        static $a = 0;
        $a++;

        echo "$a<br>";

    }

    testeStatic();
    testeStatic();
    testeStatic();