<?php

namespace Database\Factories;

use App\Models\Model;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostfactoryFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Model::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $title = $this->faker->sentence;
        $author = $this->faker->sentence;
        return [
            'title' => $title,
            'author' => $author,
            'image' $this->faker->imageUrl(640, 480, 'animals', true),
            'content' => $this->faker->_.realText(),
            'draft' => random_int(0, 1),
        ];
    }
}
