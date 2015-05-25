<?php
namespace Animales;

class Reptil extends Vertebrado {
    use Oviparo;
    
    private $escamas;

    /**
     * @return mixed
     */
    public function getEscamas() {
        return $this->escamas;
    }
}