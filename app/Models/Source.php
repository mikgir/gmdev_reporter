<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Source extends Model
{
    use HasFactory;

    protected $table = 'sources';

    protected $fillable = [
        'category_id',
        'source_link',
        'title',
        'link',
        'image',
        'description',
    ];

//    Relations

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }
    public function news(): HasMany
    {
        return $this->hasMany(News::class, 'source_id');
    }

}
