<?php

namespace Database\Seeders;

use App\Models\Blogs;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * Seeder untuk mengisi tabel blogs beserta users dummy.
 */
class BlogSeeder extends Seeder
{
    /**
     * Jalankan seeding database.
     */
    public function run(): void
    {
        // ======================
        // 1. Buat atau ambil users
        // ======================
        $users = collect([
            ['name' => 'Amelia Akhila', 'email' => 'ameliaakhila@gmail.com'],
            ['name' => 'Akhila Aqna', 'email' => 'akhilaaqna@gmail.com'],
            ['name' => 'Amelia Aqna', 'email' => 'ameliaaqna@gmail.com'],
        ])->map(function ($data) {
            // Buat username dari nama (lowercase, hapus spasi)
            $username = strtolower(str_replace(' ', '', $data['name']));

            return User::firstOrCreate(
                ['name' => $data['name'], 'username' => $username],
                ['email' => $data['email'], 'password' => Hash::make($username)]
            );
        });

        // ======================
        // 2. Data blog dummy
        // ======================
        $blogsData = [
            [
                'title' => 'Pengertian Laravel 12',
                'content' => "Laravel 12 adalah versi terbaru dari framework Laravel ...",
                'list' => [
                    'Mendukung PHP 8.3',
                    'Performa lebih cepat',
                    'Dukungan long-term release (LTS)',
                    'Cocok untuk proyek skala besar',
                ],
                'category' => 'Beginner',
            ],
            // ... data blog lainnya sama seperti sebelumnya
        ];

        // ======================
        // 3. Map warna berdasarkan kategori
        // ======================
        $colorMap = [
            'Beginner' => 'green',
            'Intermediate' => 'yellow',
            'Advance' => 'red',
        ];

        // ======================
        // 4. Create blogs untuk setiap user
        // ======================
        $users->each(function ($user) use ($blogsData, $colorMap) {
            foreach ($blogsData as $blog) {
                Blogs::create([
                    'slug' => Str::slug($blog['title']) . '-' . $user->id,
                    'title' => $blog['title'],
                    'auth_id' => $user->id,
                    'content' => $blog['content'],
                    'list' => $blog['list'],
                    'category' => $blog['category'],
                    'color' => $colorMap[$blog['category']] ?? 'gray',
                ]);
            }
        });
    }
}
