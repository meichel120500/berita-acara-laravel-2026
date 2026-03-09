<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PerhitunganController extends Controller
{
    function index(){
        return view('balok.lp_balok');
    }
   public function indexV(){
        return view('kubus.volume_kubus');
    }
    
public function indexT(){
        return view('tabung.lp_tabung');
    }
    public function indexK(){
        return view('tabung.volume_tabung');
    }


    function store(Request $request)
    {
        $angka1 =   $request->angka1;
        $angka2 = $request->angka2;
        $operator =  $request->operator;
        
        $hasil = 0;
        
        switch($operator){
            case '+':
                $hasil= $angka1 + $angka2;
                break;
                case '-':
                    $hasil= $angka1 - $angka2;
                    break;
                    case '*':
                        $hasil= $angka1 * $angka2;
                        break;
                        case '/':
                            if ($angka2 == 0) {
                                return back()->with('error', 'Tidak bisa dbagi 0!');
                                }
                                $hasil= $angka1 / $angka2;
                                break;
                                }
                                return view('perhitungan.index',compact('hasil'));
                                }
                                function storeLpKubus(Request $request)
                                {
                                    //L = 6*s^2
                                   $s = $request->sisi;
                                   $hasil = 6*$s*$s;

                                   return view('balok.lp_balok',compact('hasil'));
                                }
                               public  function storeVKubus(Request $request)
                                {
                                    //L = 6*s^2
                                   $s = $request->sisi;
                                   $hasil = $s*$s*$s;

                                   return view('kubus.volume_kubus',compact('hasil'));
                                }
                                public  function storeLpTabung(Request $request)
                                {
                                    //L = 6*s^2
                                   $r = $request->angka1;
                                   $v = 3.14;
                                   $t = $request->angka2;
                                   $hasil = 2*$v*$r*($r + $t);

                                   return view('tabung.lp_tabung',compact('hasil'));
                                }
                                public  function storeVT(Request $request)
                                {
                                    //L = 6*s^2
                                   $r = $request->angka1;
                                   $v = 3.14;
                                   $t = $request->angka2;
                                   $hasil = $v*$r*$r*$t;

                                   return view('tabung.volume_tabung',compact('hasil'));
                                }
}                         