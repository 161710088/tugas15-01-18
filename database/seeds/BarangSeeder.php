  <?php

use Illuminate\Database\Seeder;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $a = [
        			['kode_barang'=>'123','Nama_barang'=>'aqua','Harga'=>'2000'],
                    ['kode_barang'=>'124','Nama_barang'=>'siera','Harga'=>'2000']

             ];
        DB::table('barangs')->insert($a);
    }
}