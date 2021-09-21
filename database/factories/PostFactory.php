<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class PostFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Post::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $title = $this->faker->sentence(mt_rand(4, 6));
        $slug = Str::slug($title, '-');
        return [
            'title' => $title,
            'slug' => $slug,
            'user_id' => mt_rand(1, 5),
            'category_id' => mt_rand(1, 3),
            'excerpt' => $this->faker->paragraph(mt_rand(5, 10)),
            'body' => $this->faker->paragraph(mt_rand(5, 10))
        ];
    }
}
