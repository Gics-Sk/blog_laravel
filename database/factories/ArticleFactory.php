<?php

namespace Database\Factories;
use App\Models\Article;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ArticleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Article::class;

    public function definition()
    {
        return [
            'title' => $this->faker->sentence(15), // on veut 15 mots
            'body' => $this->faker->paragraph(50), // on veut 50 phrases
            'user_id' => function (){
                return User::inRandomOrder()->first()->id;
            },
            'image' => $this->faker->image('public/images'),
        ];
    }
}
