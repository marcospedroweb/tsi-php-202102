<?php

include 'Usuario.class.php';

class Main {

    var $usuario;

    function run(){

        $this->instanciaUsuario();

        echo "O atributo é: " . $this->usuario->nome . "<br><br>";

        $this->usuario->addUser('Prof. Bono');

        echo "<br><br>O atributo é: " . $this->usuario->nome . "<br><br>";

        $this->usuario->addUser('Gustavo');

        echo "<br><br>O atributo é: " . $this->usuario->nome . "<br><br>";
    }

    function instanciaUsuario(){

        $this->usuario = new Usuario;
    }
}

$main = new Main;
$main->run();