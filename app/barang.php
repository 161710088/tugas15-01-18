<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class barang extends Model
{
  protected $table = 'barangs';
  protected $fillable = ['kode_barang','Nama_barang','Harga'];
}