<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Galeries;
//use Carbon\Carbon;
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
            
            'gambar' => 'harau.jpg',
            'deskripsi' => 'Lembah Harau adalah sebuah ngarai dekat kota Payakumbuh di kabupaten Limapuluh Koto, provinsi Sumatera Barat. Lembah Harau diapit dua bukit cadas terjal dengan ketinggian mencapai 150 meter berupa batu pasir yang terjal berwarna-warni, dengan ketinggian 100 sampai 500 meter. Topografi Cagar Alam Harau adalah berbukit-bukit dan bergelombang.',
            'lat' => '-0.123844',   
            'lng' => ' 100.691349',
          ],
          [
             
            'nama' => 'Kelok 9',
            'lokasi' => 'Payakumbuh',
            
            'gambar' => 'kelok9.jpg',
            'deskripsi' => 'Kelok 9 atau Kelok Sembilan adalah ruas jalan berkelok yang terletak sekitar 30 km sebelah timur dari Kota Payakumbuh, Sumatera Barat menuju Provinsi Riau. Jalan ini membentang sepanjang 300 meter di Jorong Aie Putiah, Nagari Sarilamak, Kecamatan Harau, Kabupaten Lima Puluh Kota, Sumatera Barat dan merupakan bagian dari ruas jalan penghubung Lintas Tengah Sumatera dan Pantai Timur Sumatera. Jalan ini memiliki tikungan yang tajam dan lebar sekitar 5 meter, berbatasan dengan jurang, dan diapit oleh dua perbukitan di antara dua cagar alam: Cagar Alam Air Putih dan Cagar Alam Harau.',
            'lat' => '-0.067936', 
            'lng' => '100.697710',
          ],
          [
             
            'nama' => 'Angso Duo',
            'lokasi' => 'Pariaman',
            
            'gambar' => 'angsoduo.jpg',
            'deskripsi' => 'Sumatera Barat memiliki banyak sekali wisata pulau yang cantik dengan pemandangan alam dan bawah lautnya yang eksotis. Salah satunya adalah Pulau Angso Duo. Sebuah pulau kecil nan indah yang memiliki daya tarik bagi wisatawan domestik dan mancanegara. Pulau Angso Duo ini memiliki keindahan bawah laut yang sangat mempesona dengan keanekaragaman terumbu karang, ikannya yang bervariasi dan air lautnya yang jernih. Ini yang menjadikan wisatawan domestik dan mancanegara banyak berlibur ke Pulau Angso Duo.',
            'lat' => '-0.633087',
            'lng' => '100.100072',
          ],
          [
            'nama' => 'Masjid Raya Sumbar',
            'lokasi' => 'Padang',
            
            'gambar' => 'mesjidraya.jpg',
            'deskripsi' => 'Masjid Raya Sumatera Barat adalah masjid terbesar di Sumatera Barat, terletak menghadap Jalan Khatib Sulaiman, Kecamatan Padang Utara, Kota Padang. Masjid ini masih dalam tahap konstruksi sejak peletakan batu pertama pada 21 Desember 2007. Pembangunan dikerjakan secara bertahap karena keterbatasan anggaran dari provinsi. ',
            'lat' => '-0.924177',   
            'lng' => '100.362768',
          ],
          [
            'nama' => 'Pantai Air Manis',
            'lokasi' => 'Padang',
            
            'gambar' => 'pantaiairmanis.JPG',
            'deskripsi' => 'Pantai Air Manis atau Pantai Aia Manih dalam bahasa Minang adalah pantai yang terletak kurang lebih 10 km ke selatan dari pusat Kota Padang. Lokasinya Berada di belakang Gunung Padang atau tepatnya di Kecamatan Padang Selatan, Kota Padang. Pantai ini merupakan salah satu tujuan wisata populer yang selalu ramai dikunjungi oleh masyarakat. Pantai ini dikenal dengan ombaknya yang kecil, memiliki panorama yang indah di sisi utaranya dan legenda Malin Kundang.',
            'lat' => '-0.988796', 
            'lng' => '100.360017',
          ],
           [
            'nama' => 'Air Terjun Lembah Anai',
            'lokasi' => 'Tanah Datar',
            
            'gambar' => 'lembahanai.JPG',
            'deskripsi' => 'Lembah Anai Terletak di tepi Jalan Raya Padang-Bukittinggi, air terjun ini sebenarnya terletak di kawasan cagar alam Lembah Anai, Kabupaten Tanah Datar, Sumatera Barat. Di sekitar air terjun terdapat monyet yang berkeliaran. Air terjun dengan ketinggian kurang lebih 60 meter ini punya pemandangan luar biasa. Pada saat liburan, air terjun ini dikunjungi oleh ratusan pengunjung.',
            'lat' => '-0.483602', 
            'lng' => '100.338433',
          ],
           [
            'nama' => 'Rumah Gadang Sungai Baringin',
            'lokasi' => 'Payakumbuh',
            
            'gambar' => 'rumahgodang.jpg',
            'deskripsi' => 'Rumah yang megah ini merupakan rumah adat dari Provinsi Sumatera Barat. Rumah adat ini tidak hanya ada di daerah Pagaruyung tetapi juga ada di daerah Sungai Baringin tepatnya Sungai Beringin, Payakumbuh, Lima Puluh Kota, Sumatera Barat. Rumah gadang ini terletak di tengah-tengah sawah, bagi kalian yang menyukai wisata budaya maka direkomendasikan untuk datang ke Rumah Gadang Sungai Beringin.',
            'lat' => '-0.221389',
            'lng' => ' 100.584990',
          ],
          [
            'nama' => 'Pantai Gondoriah',
            'lokasi' => 'Payakumbuh',
           
            'gambar' => 'pantaigondoriah.png',
            'deskripsi' => 'Pantai Gandoriah adalah sebuah objek wisata pantai yang terletak sekitar 100 meter dari pusat kota Pariaman, provinsi Sumatera Barat, Indonesia. Pada hari libur pantai ini dilewati oleh kereta api wisata yang datang setiap hari dari stasiun Simpang Haru Padang menuju stasiun Pariaman. Di pantai Gandoriah ini setiap tahun dilaksanakan upacara pembuangan Tabuik di waktu matahari terbenam pada tanggal 10 Muharram.',
            'lat' => '-0.625207', 
            'lng' => '100.114931',
          ],




      ]);
      
    }
}
