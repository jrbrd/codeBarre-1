<?php


    class CodeBarre
    {

    public $elementA;
    public $elementB;
    public $elementC;
    public $numero;

    public function __construct($numero) {
        $this->numero = $numero;
    }

    public function dessine($numero) {

        $elementA = [];

        $elementA[0] = ["___XX_X"];
        $elementA[1] = ["__XX__X"];
        $elementA[2] = ["__X__XX"];
        $elementA[3] = ["_XXXX_X"];
        $elementA[4] = ["_X___XX"];
        $elementA[5] = ["_XX___X"];
        $elementA[6] = ["_X_XXXX"];
        $elementA[7] = ["_XXX_XX"];
        $elementA[8] = ["_XX_XXX"];
        $elementA[9] = ["___X_XX"];

        elementB = [];

        $elementB[0] = ["___XX_X"];
        $elementB[1] = ["__XX__X"];
        $elementB[2] = ["__X__XX"];
        $elementB[3] = ["_XXXX_X"];
        $elementB[4] = ["_X___XX"];
        $elementB[5] = ["_XX___X"];
        $elementB[6] = ["_X_XXXX"];
        $elementB[7] = ["_XXX_XX"];
        $elementB[8] = ["_XX_XXX"];
        $elementB[9] = ["___X_XX"];

        $elementC = [];
        $elementC[0] = 'XXX__X_';
        $elementC[1] = 'XX__XX_';
        $elementC[2] = 'XX_XX__';
        $elementC[3] = 'X_____X';
        $elementC[4] = 'XXXX';
        $elementC[5] = 'XXXX';
        $elementC[6] = 'XX__';
        $elementC[7] = 'XX__';
        $elementC[8] = 'XX_';
        $elementC[9] = 'XXX_X__';



    }



}