<?php
class proveedor
{
public $id;
public $nombreapellido;
public $numerodedocumento;
public $producto;

public function mostrarproveedor()
{

    echo 'id: '.$this->id.'<br>';
    echo 'nombre y apellido: '.$this->nombreapellido.'<br>';
    echo 'dni:'.$this->numerodedocumento.'<br>';
    echo 'id: '.$this->producto->id.'<br>';
    echo 'codigo: '.$this->producto->codigo.'<br>';
    echo 'descripcion: '.$this->producto->descripcion.'<br>';
    echo 'id: '.$this->producto->marcaproducto->id.'<br>';
    echo 'descripcion: '.$this->producto->marcaproducto->descripcion.'<br>';
    echo 'codigo: '.$this->producto->marcaproducto->codigo.'<br>';

}

}