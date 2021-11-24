<?php

namespace Database\Factories;

use App\Models\TblPostulantes;
use App\Models\TblProyectosPP;
use Illuminate\Database\Eloquent\Factories\Factory;

class TblPostulantesFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = TblPostulantes::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    { 
        return [
            'nombre' => $this->faker->name(),
            'edad' => $this->faker->randomNumber(2, true),
            'sexo' => $this->faker->randomElement(['H', 'F']),
            'curp' => $this->faker->regexify('[\A-Z]{4}[0-9]{6}[HM]{1}[A-Z]{2}[BCDFGHJKLMNPQRSTVWXYZ]{3}([A-Z]{2})?([0-9]{2})?'),
            'telefono' => $this->faker->numerify('722#######'),
            'correo' => $this->faker->freeEmail(),
            'domicilio' => $this->faker->address(),
            'integrante_pc' => $this->faker->randomElement([$this->faker->sentence(),null]),
            'organizacion_social' => $this->faker->randomElement([$this->faker->sentence(),null]),
            'reside_municipio' => $this->faker->randomElement(['S','N']),
             'id_proyecto_pp' => TblProyectosPP::factory()->create()->id,
            //'id_proyecto_pp' => TblProyectosPP::all()->random()->id,
        ];
    }
}
