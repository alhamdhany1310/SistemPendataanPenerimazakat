<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cpenerima;
use App\Models\Todo;
use App\Models\User;

class CpenerimaController extends Controller
{
    public function isi(){
        $date =Todo::all();
        return view('home.isi',compact('date'));
    }
    public function addIsi(Request $request){
        // var_dump($request->age);
        // $todo=new Cpenerima();
        // $todo->name=$request->name;
        // $todo->activity=$request->activity;
        // $todo->user_id=$request->user_id;
        // $todo->save();
        // return redirect()->route('home');
        $cpenerima=new Cpenerima();
        $cpenerima->name=$request->name;
        $cpenerima->usia=$request->usia;
        $cpenerima->provinsi=$request->provinsi;
        $cpenerima->kabupaten=$request->kabupaten;
        $cpenerima->kecamatan=$request->kecamatan;
        $cpenerima->alamat=$request->alamat;
        $cpenerima->save();
        return redirect()->route('penerima');
    }
}
