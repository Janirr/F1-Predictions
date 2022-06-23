<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory\App\Models\Prediction
 */
class PredictionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $listOfDrivers=['Max Verstappen','Sergio Pérez','Charles Leclerc','George Russell','Carlos Sainz Jr.','Lewis Hamilton','Lando Norris','Valtteri Bottas','Esteban Ocon','Fernando Alonso','Pierre Gasly','Kevin Magnussen','Daniel Ricciardo','Sebastian Vettel','Yūki Tsunoda','Zhou Guanyu','Alexander Albon','Lance Stroll','Mick Schumacher','Nico Hülkenberg','Nicholas Latifi'];
        $rand_keys = array_rand($listOfDrivers, 10);
        return [
        'first' => $listOfDrivers[$rand_keys[0]],
        'second' => $listOfDrivers[$rand_keys[1]],
        'third' => $listOfDrivers[$rand_keys[2]],
        'fourth' => $listOfDrivers[$rand_keys[3]],
        'fifth' => $listOfDrivers[$rand_keys[4]],
        'sixth' => $listOfDrivers[$rand_keys[5]],
        'seventh' => $listOfDrivers[$rand_keys[6]],
        'eighth' => $listOfDrivers[$rand_keys[7]],
        'nineth' => $listOfDrivers[$rand_keys[8]],
        'tenth' => $listOfDrivers[$rand_keys[9]],
        ];
    }
}