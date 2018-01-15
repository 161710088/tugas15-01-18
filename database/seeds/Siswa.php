<?php

use Illuminate\Database\Seeder;

class Siswa extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$a= [
    		['nama'=>'ahmad f','alamat'=>'cibaduyut','tanggal_lahir'=>'1910-02-02']
    		];
    		DB::table('siswas')->insert($a);
    }
}
