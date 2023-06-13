<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Item extends Model
{
    use HasFactory;

    public function likes()
    {
        return $this->morphMany('App\Models\Like', 'likeable');
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    protected $fillable = [
        'price',
        'title',
        'description',
        'royalties',
        'size',
        'img_item',
        'category_id',
        'collection_id',
        'user_id',
    ];
}
