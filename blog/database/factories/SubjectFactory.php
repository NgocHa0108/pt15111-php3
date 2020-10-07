<?php

namespace Database\Factories;

use App\Models\Subject;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class SubjectFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Subject::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'toan'=> $this->faker->numberBetween(0, 10),
            'van' =>$this->faker->numberBetween(0, 10),
            'tieng_anh'=> $this->faker->numberBetween(0, 10),
        ];
    }
}
