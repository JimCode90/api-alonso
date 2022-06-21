<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DestinosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('destinos')->insert([
            "pais" => "Egipto",
            "descripcion" => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type",
            "img_fondo" => env('APP_URL')."/img/destinos/fondo_egipto.jpg",
            "img_bandera" => env('APP_URL')."/img/destinos/egipto.svg",
        ]);

        DB::table('destinos')->insert([
            "pais" => "Turquia",
            "descripcion" => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type",
            "img_fondo" => env('APP_URL')."/img/destinos/fondo_turquia.jpg",
            "img_bandera" => env('APP_URL')."/img/destinos/turquia.svg"
        ]);

        DB::table('destinos')->insert([
            "pais" => "Brasil",
            "descripcion" => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type",
            "img_fondo" => env('APP_URL')."/img/destinos/fondo_brasil.jpg",
            "img_bandera" => env('APP_URL')."/img/destinos/brasil.svg"
        ]);

        DB::table('destinos')->insert([
            "pais" => "Cyprus",
            "descripcion" => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type",
            "img_fondo" => env('APP_URL')."/img/destinos/fondo_cyprus.jpg",
            "img_bandera" => env('APP_URL')."/img/destinos/cyprus.svg"
        ]);

        DB::table('destinos')->insert([
            "pais" => "Estados Unidos",
            "descripcion" => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type",
            "img_fondo" => env('APP_URL')."/img/destinos/fondo_eeuu.jpg",
            "img_bandera" => env('APP_URL')."/img/destinos/usa.svg"
        ]);

        DB::table('destinos')->insert([
            "pais" => "Inglaterra",
            "descripcion" => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type",
            "img_fondo" => env('APP_URL')."/img/destinos/fondo_inglaterra.jpg",
            "img_bandera" => env('APP_URL')."/img/destinos/inglaterra.svg"
        ]);
        DB::table('destinos')->insert([
            "pais" => "Italia",
            "descripcion" => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type",
            "img_fondo" => env('APP_URL')."/img/destinos/fondo_italia.jpg",
            "img_bandera" => env('APP_URL')."/img/destinos/italia.svg"
        ]);

        DB::table('destinos')->insert([
            "pais" => "Japon",
            "descripcion" => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type",
            "img_fondo" => env('APP_URL')."/img/destinos/fondo_japon.jpg",
            "img_bandera" => env('APP_URL')."/img/destinos/japon.svg"
        ]);

        DB::table('destinos')->insert([
            "pais" => "Rusia",
            "descripcion" => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type",
            "img_fondo" => env('APP_URL')."/img/destinos/fondo_rusia.jpg",
            "img_bandera" => env('APP_URL')."/img/destinos/rusia.svg"
        ]);
    }
}
