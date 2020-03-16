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

    public function dessine($chiffre1, $chiffre2, $chiffre3, $chiffre4, $chiffre5, $chiffre6, $chiffre7, $chiffre8) {

        $numero = [];
        $numero[] = ["X", "_", "X"];

            if ($chiffre1 = 0) {
                $numero[] = "_";
                $numero[] = "_";
                $numero[] = "_";
                $numero[] = "X";
                $numero[] = "X";
                $numero[] = "_";
                $numero[] = "X";
            }
            if ($chiffre1 = 1) {
                $numero[] = "_";
                $numero[] = "_";
                $numero[] = "X";
                $numero[] = "X";
                $numero[] = "_";
                $numero[] = "_";
                $numero[] = "X";
            }
            if ($chiffre1 = 2) {
                $numero[] = "_";
                $numero[] = "_";
                $numero[] = "X";
                $numero[] = "_";
                $numero[] = "_";
                $numero[] = "X";
                $numero[] = "X";
            }
            if ($chiffre1 = 3) {
                $numero[] = "_";
                $numero[] = "X";
                $numero[] = "X";
                $numero[] = "X";
                $numero[] = "X";
                $numero[] = "_";
                $numero[] = "X";
            }
            if ($chiffre1 = 4) {
                $numero[] = "_";
                $numero[] = "X";
                $numero[] = "_";
                $numero[] = "_";
                $numero[] = "_";
                $numero[] = "X";
                $numero[] = "X";
            }
            if ($chiffre1 = 5) {
                $numero[] = "_";
                $numero[] = "X";
                $numero[] = "X";
                $numero[] = "_";
                $numero[] = "_";
                $numero[] = "_";
                $numero[] = "X";
            }
            if ($chiffre1 = 6) {
                $numero[] = "_";
                $numero[] = "X";
                $numero[] = "_";
                $numero[] = "X";
                $numero[] = "X";
                $numero[] = "X";
                $numero[] = "X";
            }
            if ($chiffre1 = 7) {
                $numero[] = "_";
                $numero[] = "X";
                $numero[] = "X";
                $numero[] = "X";
                $numero[] = "_";
                $numero[] = "X";
                $numero[] = "X";
            }
            if ($chiffre1 = 8) {
                $numero[] = "_";
                $numero[] = "X";
                $numero[] = "X";
                $numero[] = "_";
                $numero[] = "X";
                $numero[] = "X";
                $numero[] = "X";
            }
            if ($chiffre1 = 9) {
                $numero[] = "_";
                $numero[] = "_";
                $numero[] = "_";
                $numero[] = "X";
                $numero[] = "_";
                $numero[] = "X";
                $numero[] = "X";
            }



        $numero[] = "X";
        $numero[] = "_";
        $numero[] = "X";
    }

    $elementA = [];
    $elementA[0] = ["_", "_", "_", "X",  ]



}