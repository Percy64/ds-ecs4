<?php

class cliente

{
    public $id;
    public $nombreapellido;
    public $numerodedocumento;

    public function mostarcliente()
    {
        echo 'id: '.$this->id.'<br>';
        echo 'nombre y apellido: '.$this->nombreapellido.'<br>';
        echo 'dni: '.$this->numerodedocumento.'<br>';

    }

}