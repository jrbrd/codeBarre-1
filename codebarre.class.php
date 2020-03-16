<?php


class CodeBarre
{

public $bandeblanche;
public $bandenoires;
public $elementA;
public $elementB;
public $elementC;
public $gardeGauche;
public $garardeCentrale;
public $gardeDroite;
public $numero;

public function __construct($numero) {
    $this->numero = $numero;
}

public function getCodeBarre() {
    return $this->CodeBarre;
}

public function setCodeBarres($numero) {
    $this->numero = $numero;
}


}