<?php

    class Pessoa {
        function falar(){
            echo"Olá";
        }
    }

    $fabio = new Pessoa();

    $fabio->nome = "fabio";

    echo $fabio->nome;

    echo "<br>";

    $fabio->falar();