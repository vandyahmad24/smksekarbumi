<?php

namespace Database\Factories;

use App\Models\Article;
use App\Models\Model;
use Illuminate\Database\Eloquent\Factories\Factory;

class ArticleFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Article::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence(rand(8,12)),
            'slug' => $this->faker->slug(),
            'excerpt' => $this->faker->text(rand(250,300)),
            'body' => $this->faker->paragraphs(rand(10,15), true),
            'image' => 'slider1.jpg',
        ];
    }
}
