<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index() {
    $judul = 'SMK ASSALAAM';
    $tanggal = '<i>09-01-2018</i>';
    return view('about1', compact('judul', 'tanggal'));
}}
