<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;




class BanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create('id_ID');

        for ($i = 1; $i <= 10; $i++) {
            DB::table('ban')->insert([
                'kode_part' => $faker->randomNumber(),
                'nama_barang' => $faker->domainName,
                'nama_merk' => $faker->streetName,
                'tipe_ban' => $faker->colorName,
                'ukuran_ban' => $faker->lastName,
                'harga' => $faker->numberBetween(10000, 1000000000),

            ]);
        }
    }
}