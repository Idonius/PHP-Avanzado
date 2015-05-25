<?php
namespace Animales;

abstract class Vertebrado implements Animal {

    private $huesos;

    /**
     * @return mixed
     */
    public function getHuesos() {
        return $this->huesos;
    }

    public function nacer()
    {
        // TODO: Implement nacer() method.
    }

    public function crecer()
    {
        // TODO: Implement crecer() method.
    }

    public function reproducir()
    {
        // TODO: Implement reproducir() method.
    }

    public function morir()
    {
        // TODO: Implement morir() method.
    }
}