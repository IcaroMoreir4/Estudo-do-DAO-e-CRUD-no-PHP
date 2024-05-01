<?php

class Carro {
    private $modelo;
    private $cor;
    private $ano ;
    private $fabricante;
    private $id;

    public function __construct($modelo, $cor, $ano, $fabricante) {
        $this->modelo = $modelo;
        $this->cor = $cor;
        $this->ano = $ano;
        $this->fabricante = $fabricante;
    }

    public function getModelo() {
        return $this->modelo;
    }
    public function setModelo($m) {
        $this->modelo = $m;
    }
    public function getCor() {
        return $this->cor;
    }
    public function setCor($c) {
        $this->cor = $c;
    }
    public function getAno() {
        return $this->ano;
    }
    public function setAno($a) {
        $this->ano = $a;
    }
    public function getFabricante() {
        return $this->fabricante;
    }
    public function setFabricante($f) {
        $this->fabricante = $f;
    }
    public function getId() {
        return $this->id;
    }
    public function setId($i) {
        $this->id = $i;
    }

}

?>