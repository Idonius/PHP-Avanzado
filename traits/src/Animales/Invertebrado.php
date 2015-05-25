<?php
namespace Animales;

abstract class Invertebrado implements Animal {
    use Oviparo;

    private $hemocianina;

    /**
     * @return mixed
     */
    public function getHemocianina() {
        return $this->hemocianina;
    }

    public function nacer(){}

    public function crecer(){}

    public function reproducir(){}

    public function morir(){}
}