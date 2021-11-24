<?php

namespace Database\Factories;

use App\Models\CatMunicipio;
use App\Models\CatTipoProyecto;
use App\Models\TblProyectosPP;
use Illuminate\Database\Eloquent\Factories\Factory;

class TblProyectosPPFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = TblProyectosPP::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombre_proyecto' => $this->faker->sentence(),
            'id_municipio' => CatMunicipio::all()->random()->id,
            'id_tipo_proyecto' => CatTipoProyecto::all()->random()->id,
            'impacto' => $this->faker->text(500),
            'componentes' => $this->faker->text(500),
            'latlng' => strval($this->faker->latitude($min = 19, $max = 20)).",".strval($this->faker->longitude($min = -97, $max = -98)),
            'img_predio' => $this->faker->image(null, 640, 480),
            'domicilio' => $this->faker->address(),
            'costo' => $this->faker->randomFloat(2, 0, 9999999),
            'poblacion_beneficiada' => $this->faker->randomNumber(5, false),
            'poblacion_beneficiada_esp' => $this->faker->sentence(),
            'tiempo_ejecucion' => $this->faker->sentence(),
            'vida_util' => $this->faker->sentence(),
        ];
    }
}
