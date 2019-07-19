<?php

namespace App\Http\Controllers;

use App\ModelCompare;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class Compare extends Controller
{

    public function index(Request $request){

        $tes=DB::table('compare')
                ->select('compare.*')
                ->first();
        
        
        $string1 = $request->string;
        $string2= "Ayo Mencoba Bermain";
        $string3= "Testing Aplikasi Sibora di Laravel";
        $string4= "Belajar Menggunakan Similarity di Poliness";
        $string5= "Similarity Adalah Makanan yang harus dihabiskan pada waktunya";
        $string6= "Laravel merupakan Framework Multiguna";
        // $string2 = $tes->string1;
        // $string3 = $tes->string2;
        // $string4 = $tes->string3;
        // $string5 = $tes->string4;
        // $string6 = $tes->string5;

        $cekk=self::compareStrings($string1,$string2,$string3,$string4,$string5,$string6);

        // dd($cekk);

        return redirect()->back()->with(["hasil"=>$cekk]);

    }

    public function compareStrings($s1, $s2, $s3, $s4, $s5, $s6) 
    {
        //one is empty, so no result
        if (strlen($s1)==0 || strlen($s2)==0 || strlen($s3)==0 || strlen($s4)==0 || strlen($s5)==0 || strlen($s6)==0) {
            return 0;
        }
    
        //replace none alphanumeric charactors
        //i left - in case its used to combine words
        $s1clean = preg_replace("/[^A-Za-z0-9-]/", ' ', $s1);
        $s2clean = preg_replace("/[^A-Za-z0-9-]/", ' ', $s2);
        $s3clean = preg_replace("/[^A-Za-z0-9-]/", ' ', $s3);
        $s4clean = preg_replace("/[^A-Za-z0-9-]/", ' ', $s4);
        $s5clean = preg_replace("/[^A-Za-z0-9-]/", ' ', $s5);
        $s6clean = preg_replace("/[^A-Za-z0-9-]/", ' ', $s6);
    
        //remove double spaces
        while (strpos($s1clean, "  ")!==false) {
            $s1clean = str_replace("  ", " ", $s1clean);
        }
        while (strpos($s2clean, "  ")!==false) {
            $s2clean = str_replace("  ", " ", $s2clean);
        }
        while (strpos($s3clean, "  ")!==false) {
            $s3clean = str_replace("  ", " ", $s3clean);
        }
        while (strpos($s4clean, "  ")!==false) {
            $s4clean = str_replace("  ", " ", $s4clean);
        }
        while (strpos($s5clean, "  ")!==false) {
            $s5clean = str_replace("  ", " ", $s5clean);
        }
        while (strpos($s6clean, "  ")!==false) {
            $s6clean = str_replace("  ", " ", $s6clean);
        }
    
        //create arrays
        $ar1 = explode(" ",$s1clean);
        $ar2 = explode(" ",$s2clean);
        $ar3 = explode(" ",$s3clean);
        $ar4 = explode(" ",$s4clean);
        $ar5 = explode(" ",$s5clean);
        $ar6 = explode(" ",$s6clean);
        $l1 = count($ar1);
        $l2 = count($ar2);
        $l3 = count($ar3);
        $l4 = count($ar4);
        $l5 = count($ar5);
        $l6 = count($ar6);
    
        //flip the arrays if needed so ar1 is always largest.
        if ($l2>$l1) {
            $t = $ar2;
            $ar2 = $ar1;
            $ar1 = $t;
        }
        if ($l3>$l1) {
            $t = $ar3;
            $ar3 = $ar1;
            $ar1 = $t;
        }
        if ($l4>$l1) {
            $t = $ar4;
            $ar4 = $ar1;
            $ar1 = $t;
        }
        if ($l5>$l1) {
            $t = $ar5;
            $ar5 = $ar1;
            $ar1 = $t;
        }
        if ($l6>$l1) {
            $t = $ar6;
            $ar6 = $ar1;
            $ar1 = $t;
        }
    
        //flip array 2, to make the words the keys
        $ar2 = array_flip($ar2);
        $ar3 = array_flip($ar3);
        $ar4 = array_flip($ar4);
        $ar5 = array_flip($ar5);
        $ar6 = array_flip($ar6);
    
    
        $maxwords = max($l1, $l2, $l5, $l5, $l5, $l6);
        $matches = 0;
    
        //find matching words
        foreach($ar1 as $word) {
            if (array_key_exists($word, $ar2))
                $matches++;
            elseif (array_key_exists($word, $ar3))
                $matches++;
            elseif (array_key_exists($word, $ar4))
                $matches++;
            elseif (array_key_exists($word, $ar5))
                $matches++;
            elseif (array_key_exists($word, $ar6))
                $matches++;
        }
    
        return ($matches / $maxwords) * 100;
    }

    
}
