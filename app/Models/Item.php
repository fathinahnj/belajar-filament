<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Item extends Model
{
    protected $fillable = ['name', 'category_id', 'desc', 'location', 'item_status_id'];


    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function item_status(): BelongsTo
    {
        return $this->belongsTo(ItemStatus::class);
    }
}
