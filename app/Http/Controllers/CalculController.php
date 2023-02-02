<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculController extends Controller
{
    public function somme($a,$b){
        return 'la somme est : ' . $a + $b;
    }
    public function produit($a,$b){
        return 'la produit est : ' . $a * $b;
    }
}