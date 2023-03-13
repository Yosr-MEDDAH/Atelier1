<?php

namespace App\taxes;

class calculateur
{
    function prixTVA($prix):float{
        $montantTVA=$prix*0.2;
        return $montantTVA;
    }
    function prixTTC($prix):float{
        $montantTTC=$prix*1.2;
        return $montantTTC;
    }
}