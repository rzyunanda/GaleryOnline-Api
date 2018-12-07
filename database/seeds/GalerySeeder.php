<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Galeries;

class GalerySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      Galeries::truncate();
      $faker = Faker::create();
      // membuat 18 record dummy
      for ($i = 0; $i < 9; $i++) {
          Galeries::create([
              'gambar' => $faker->image($dir = 'public/foto',
              $width = 640, $height = 480, 'people'),
              'lokasi' => $faker->realText($maxNbChars = 25, $indexSize = 2),
              'tanggal' => $faker->dateTime($max = 'now', $timezone = null),
              'nama' => $faker->name
          ]);
      }
    }
}
