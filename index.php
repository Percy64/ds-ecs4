<?php

require_once 'modelo/marcaproducto.php';
require_once 'modelo/producto.php';
require_once 'modelo/proveedor.php';
require_once 'modelo/cliente.php';

$m=new marcaproducto();
$m->id=1;
$m->descripcion='sony';
$m->codigo=9011;

$p=new producto();
$p->id=256;
$p->codigo=101;
$p->descripcion='play station  ';
$p->marcaproducto=$m;

$pr=new proveedor();
$pr->id=458;
$pr->nombreapellido='emanuel merlo';
$pr->numerodedocumento=425577326;
$pr->producto=$p;
$pr->mostrarproveedor();

$c=new cliente();
$c->id=487;
$c->nombreapellido='merlo brisa';
$c->numerodedocumento=425424545;
$c->mostarcliente();

