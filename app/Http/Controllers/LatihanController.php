<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Barang;

class LatihanController extends Controller
{
    public function coba()
    {
    	return 'Ini Controller Pertama Saya';
    }
    public function about()
    {
    	return view('about');
    }
    public function profil()
    {
    	return view('profil');
    }
    public function pertambahan()
    {
    	$a=2;
    	$b=3;
    	$c=$a+$b;
    	return view('tambah',compact('c','a','b'));
    }
    public function loop()
    {
    	$a = ['tatang','Junaedi','dadang','deden'];
    	return view('pengulangan',compact('a'));
    }
    public function barang()
    { //menampilkan 
        $a = Barang::all('Nama_barang');//->pengambilan model keseluruhan
        return $a ;
    }
    public function barangss()
    {
        $a = Barang::all();
        return view('barangss',compact('a'));
    } 
}
