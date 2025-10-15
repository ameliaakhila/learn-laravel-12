<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use App\Models\Blogs;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * Factory untuk model Blogs
 *
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Blogs>
 */
class BlogsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Blogs::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            // Slug untuk URL friendly
            'slug' => Str::slug($this->faker->sentence(2)),

            // Judul blog
            'title' => $this->faker->sentence(3, false),

            // Relasi author
            'auth_id' => User::factory(),

            // Konten utama
            'content' => $this->faker->paragraphs(8, true),

            // List tambahan (4 item random)
            'list' => $this->faker->sentences(4, true),

            // Kategori: Beginner, Intermediate, Advance
            'category' => $this->faker->randomElement(['Beginner', 'Intermediate', 'Advance']),

            // Warna kategori
            'color' => $this->faker->randomElement(['green', 'yellow', 'red']),
        ];
    }
}
