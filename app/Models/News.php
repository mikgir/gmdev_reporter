<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Facades\DB;

class News extends Model
{
    use HasFactory;

    protected $table = 'news';

    protected $fillable = [
        'category_id',
        'title',
        'status',
        'author',
        'image',
        'thumb_image',
        'big_image',
        'description'
    ];
//    Relations

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }
}