<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * Class Blogs
 *
 * Model untuk tabel blogs yang menyimpan artikel/blog.
 *
 * @property string $slug
 * @property string $title
 * @property int $auth_id
 * @property string $content
 * @property array $list
 * @property string $category
 * @property string $color
 *
 * @method static \Illuminate\Database\Eloquent\Builder|Blogs query()
 */
class Blogs extends Model
{
    use HasFactory;

    /**
     * Kolom yang dapat diisi massal.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'slug',
        'title',
        'auth_id',
        'content',
        'list',
        'category',
        'color',
    ];

    /**
     * Cast kolom tertentu ke tipe data spesifik.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'list' => 'array',
    ];

    /**
     * Relasi ke User (author) yang membuat blog ini.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function auth(): BelongsTo
    {
        return $this->belongsTo(User::class, 'auth_id');
    }

    /**
     * Relasi ke User (opsional, jika ingin akses user selain author).
     * Bisa dihapus jika tidak digunakan untuk menghindari kebingungan.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
