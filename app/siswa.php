<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
class siswa extends Model
{
    protected $table = 'siswas';
  	protected $fillable = ['nama','alamat','tanggal_lahir'];
}
