<?php

namespace Database\Factories;
use App\Models\Comment;
use App\Models\User;
use App\Models\Article;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class CommentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

     protected $model = Comment::class;
    public function definition()
{
    return [
        'comment' => $this->faker->text(50),
        'user_id' => function(){
            return User::inRandomOrder()->first()->id;
        },
        'article_id' => function(){
            return Article::inRandomOrder()->first()->id;
        },
    ];
}
}
