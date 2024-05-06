<?php

    //declarada fora de funções
    //não são acessíveis dentro de funções
    //precisamos usar a palavra "global" para isso

    echo $teste = "teste <br>";

    if (true) {

        echo $teste = "teste if<br>";

    }

    echo $teste;

    function teste(){

        global $teste;
        echo $teste;
    }

    teste();