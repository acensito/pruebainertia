<?php

namespace Database\Seeders;

use DateTime;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GamesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('games')->delete();

        DB::table('games')->insert([
            ['id'=> '1', 'ean' => '1234567890', 'nombre' => 'Darksiders  ', 'plataforma' => 'PS4', 'formato' => 'PAL-ES', 'image' => 'https://es.static.webuy.com/product_images/Juegos/PS4%20Juegos/9006113009146_s.jpg', 'created_at' => new DateTime(), 'updated_at' => new DateTime],
            ['id'=> '2', 'ean' => '1234567890', 'nombre' => 'Darksiders 2', 'plataforma' => 'PS4', 'formato' => 'PAL-ES', 'image' => 'https://es.static.webuy.com/product_images/Juegos/PS4%20Juegos/9006113008217_s.jpg', 'created_at' => new DateTime(), 'updated_at' => new DateTime],
            ['id'=> '3', 'ean' => '1234567890', 'nombre' => 'Darksiders 3', 'plataforma' => 'PS4', 'formato' => 'PAL-ES', 'image' => 'https://es.static.webuy.com/product_images/Juegos/PS4%20Juegos/9120080070807_s.jpg', 'created_at' => new DateTime(), 'updated_at' => new DateTime],
            ['id'=> '4', 'ean' => '1234567890', 'nombre' => 'Darksiders Genesis', 'plataforma' => 'PS4', 'formato' => 'PAL-ES', 'image' => 'https://es.static.webuy.com/product_images/Juegos/PS4%20Juegos/9120080074386_s.jpg', 'created_at' => new DateTime(), 'updated_at' => new DateTime],
            ['id'=> '5', 'ean' => '1234567890', 'nombre' => 'Mario Kart 8 Deluxe', 'plataforma' => 'NSW', 'formato' => 'PAL-ES', 'image' => 'https://pt.static.webuy.com/product_images/Jogos/Switch%20Jogos/045496420291_s.jpg', 'created_at' => new DateTime(), 'updated_at' => new DateTime],
            ['id'=> '6', 'ean' => '1234567890', 'nombre' => 'Super Mario Oddysey', 'plataforma' => 'NSW', 'formato' => 'PAL-ES', 'image' => 'https://pt.static.webuy.com/product_images/Jogos/Switch%20Jogos/0045496420925_s.jpg', 'created_at' => new DateTime(), 'updated_at' => new DateTime],
            ['id'=> '7', 'ean' => '1234567890', 'nombre' => 'Super Mario Party', 'plataforma' => 'NSW', 'formato' => 'PAL-ES', 'image' => 'https://pt.static.webuy.com/product_images/Jogos/Switch%20Jogos/0045496423001_s.jpg', 'created_at' => new DateTime(), 'updated_at' => new DateTime],
            ['id'=> '8', 'ean' => '1234567890', 'nombre' => 'Mario Tennis Aces', 'plataforma' => 'NSW', 'formato' => 'PAL-ES', 'image' => 'https://pt.static.webuy.com/product_images/Jogos/Switch%20Jogos/045496422011_s.jpg', 'created_at' => new DateTime(), 'updated_at' => new DateTime],
        ]);
    }
}
