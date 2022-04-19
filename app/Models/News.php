<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Support\Facades\DB;

class News extends Model
{
    use HasFactory;

    protected $table = 'news';

    protected $fillable = [
        'title',
        'status',
        'author',
        'image',
        'description',
        'guid',
        'pubDate'
    ];

//    Relations

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function source(): BelongsToMany
    {
        return $this->belongsToMany(Source::class);
    }
}
