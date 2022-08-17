<?php

namespace Database\Factories;
use App\Models\Authors;
use App\Models\Books;
use Illuminate\Database\Eloquent\Factories\Factory;

class AuthorsFactory extends Factory
{
    protected $model = Authors::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
   
    public function definition()
    {
        return [
            'book_id' => Books::all()->random()->id,
            'name' => $this->faker->name(),
        ];
    }
}
