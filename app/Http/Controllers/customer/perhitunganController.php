<?php

namespace App\Http\Controllers\customer;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\perhitungan;

class perhitunganController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $history=perhitungan::orderBy('created_at','DESC')->get();
        $data=[
            'history' => $history,
        ];
        return view('customer.perhitungan.index',$data);
    }

    public function store(Request $request){
       
        $detail = new perhitungan();
        $detail->tinggi = $request->get('tinggi');
        $detail->berat = $request->get('berat');
        $detail->usia= $request->get('usia');
        $detail->gender = $request->get('gender');
        $detail->kegiatan= $request->get('kegiatan');
        
        if($detail->gender == 'F'){
            $bmr = 655.0955 + (9.5634 * $detail->berat) + (1.8496 * $detail->tinggi) - (4.6756 * $detail->usia);
            if($detail->kegiatan == 'sedang'){
                $total = $bmr* 1.55;
            }elseif($detail->kegiatan == 'ringan'){
                $total = $bmr* 1.375;
            }elseif($detail->kegiatan == 'berat'){
                $total = $bmr* 1.725;
            }
        }elseif($detail->gender == 'F'){
            $bmr = 66.4730 + (13.7516 * $detail->berat) + (5.0033 * $detail->tinggi) - (6.7550 * $detail->usia);
            if($detail->kegiatan == 'sedang'){
                $total = $bmr* 1.55;
            }elseif($detail->kegiatan == 'ringan'){
                $total = $bmr* 1.375;
            }elseif($detail->kegiatan == 'berat'){
                $total = $bmr* 1.725;
            }
        }
        $detail->perhitungan = $total;
        
        $detail->save();
        return redirect()->route('perhitungan.index');

    }

    public function delete(){
        $hapus = perhitungan::truncate();
        return redirect()->route('perhitungan.index');
    }

}
