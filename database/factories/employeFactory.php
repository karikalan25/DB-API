<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

use App\Models\employe;
use App\Models\employes;
use Faker\Generator as Faker;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\employe>
 */


 class employeFactory extends Factory{

    protected $model = employe::class;
    public function definition(){
        return [
            'name'=>$this->faker->name,
            'email'=>$this->faker->unique()->safeEmail,
            'address'=>$this->faker->address,
            'phone'=>rand(1000000,2000000)
        ];
}
}

