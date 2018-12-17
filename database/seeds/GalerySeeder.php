<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Galeries;
use Carbon\Carbon;
//use Storage;

class GalerySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('galeries')->insert([
          [
           
            'nama' => 'Harau',
            'lokasi' => 'Payakumbuh',
            'tanggal'=> Carbon::now(),
            'gambar' => 'harau.jpg',
            'deskripsi' => 'Sebuah Objek wisata alam ...',
            'lat' => '123',
            'lng' => '123',
          ],
          [
             
            'nama' => 'Kelok 9',
            'lokasi' => 'Payakumbuh',
            'tanggal'=> Carbon::now(),
            'gambar' => 'kelok9.jpg',
            'deskripsi' => 'Sebuah Objek wisata alam ...',
            'lat' => '123',
            'lng' => '123',
          ],
          [
             
            'nama' => 'Angso Duo',
            'lokasi' => 'Pariaman',
            'tanggal'=> Carbon::now(),
            'gambar' => 'angsoduo.jpg',
            'deskripsi' => 'Sebuah Objek wisata alam ...',
            'lat' => '123',
            'lng' => '123',
          ],
          [
            'nama' => 'Mesjid Raya Sumbar',
            'lokasi' => 'Padang',
            'tanggal'=> Carbon::now(),
            'gambar' => 'mesjidraya.jpg',
            'deskripsi' => 'Mesjid Raya Sumbar Merupakan ...',
            'lat' => '123',
            'lng' => '123',
          ],
          [
            'nama' => 'Pantai Air Manis',
            'lokasi' => 'Padang',
            'tanggal'=> Carbon::now(),
            'gambar' => 'pantaiairmanis.JPG',
            'deskripsi' => 'Sebuah Objek wisata alam ...',
            'lat' => '123',
            'lng' => '123',
          ],
           [
            'nama' => 'Air Terjun Lembah Anai',
            'lokasi' => 'Tanah Datar',
            'tanggal'=> Carbon::now(),
            'gambar' => 'lembahanai.JPG',
            'deskripsi' => 'Sebuah Objek wisata alam ...',
            'lat' => '123',
            'lng' => '123',
          ],
           [
            'nama' => 'Rumah Godang Sungai Baringin',
            'lokasi' => 'Payakumbuh',
            'tanggal'=> Carbon::now(),
            'gambar' => 'rumahgodang.jpg',
            'deskripsi' => 'Sebuah Objek wisata alam ...',
            'lat' => '123',
            'lng' => '123',
          ],
          [
            'nama' => 'Pantai Gondoriah',
            'lokasi' => 'Payakumbuh',
            'tanggal'=> Carbon::now(),
            'gambar' => 'pantaigondoriah.png',
            'deskripsi' => 'Sebuah Objek wisata alam ...',
            'lat' => '123',
            'lng' => '123',
          ],




      ]);
      
    }
}
