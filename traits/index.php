<?php
require_once("vendor/autoload.php");

use Animales\Reptil as Reptil;
use Animales\Molusco as Molusco;

$cocodrilo = new Reptil();
$cocodrilo->getEscamas();
$cocodrilo->getHuesos();
$cocodrilo->getHuevos();


$pulpo = new Molusco();
$pulpo->getHemocianina();
$pulpo->getRadula();
$pulpo->getHuevos();

