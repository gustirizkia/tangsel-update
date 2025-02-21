<?php

namespace Database\Seeders;

use App\Models\Page;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class PageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $array = [
            "Informasi Perusahaan",
            "Syarat dan Ketentuan Umum",
            'Privasi Pedoman Liputan Media Siber',
            "Kontak Kami",
            "Karir"
        ];

        foreach ($array as $key) {
            $faker = Faker::create('id_ID');
            Page::create([
                "nama" => $key,
                "content" => $faker->sentence($nbWords = 300, $variableNbWords = true),
                "image" => "images/dummy-artikel.png",
            ]);
        }
    }
}
