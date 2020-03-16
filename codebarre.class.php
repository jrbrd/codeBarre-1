<?php


    class CodeBarre
    {

    public $bandeblanche;
    public $bandenoires;
    public $elementA;
    public $elementB;
    public $elementC;
    public $gardeGauche;
    public $gardeCentrale;
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

    public function dessine() {

        $numero = [];
        $numero[] = ["X", "_", "X"];

        foreach ($numero as $chiffre) {
            if ($chiffre = 0) {
            }

        }
        $numero[] = "X";
        $numero[] = "_";
        $numero[] = "X";
    }


}