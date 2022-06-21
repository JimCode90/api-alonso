<?php

namespace Database\Factories;

use App\Models\Destino;
use Illuminate\Database\Eloquent\Factories\Factory;

class TourFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "id_destino" => function(){
                return Destino::all()->random();
            },
            "nombre" => $this->faker->city,
            "descripcion" => $this->faker->paragraph(2),
            "precio" => $this->faker->randomFloat(2, 1000, 2000),
            "dias" => rand(7, 10),
            "reviews" => rand(1,20),
            "img_fondo" => env('APP_URL') ."/img/tours/".rand(1,15).".jpg",
        ];
    }
}
