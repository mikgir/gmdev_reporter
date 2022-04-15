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
        'source',
        'link',
        'status'
    ];

//    Relations

    public function news(): BelongsToMany
    {
        return $this->belongsToMany(News::class);
    }

}
