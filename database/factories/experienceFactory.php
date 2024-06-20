<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

use App\Models\employe;
use App\Models\experience;
use Faker\Generator as Faker;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\employe>
 */

 class experienceFactory extends Factory{

    protected $model = experience::class;
    public function definition()
    {
        return [
            'employe_id' => employe::factory()->create()->id,
            'company'=>$this->faker->company,
            'designation'=>$this->faker->jobTitle,
            'start_date'=>$this->faker->date,
            'end_date'=>$this->faker->date,
            'experiences'=>rand(1,50)
        ];
    }

 }
