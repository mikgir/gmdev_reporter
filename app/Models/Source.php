<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Source extends Model
{
    use HasFactory;

    protected $table = 'sources';

    protected $fillable = [
        'category_id',
        'title',
        'link',
        'description',
    ];

//    Relations
    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }
    public function news(): BelongsToMany
    {
        return $this->belongsToMany(News::class);
    }

}
