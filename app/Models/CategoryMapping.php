<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class CategoryMapping extends Model
{
    use HasFactory;
    protected $guarded = [];

    /**
     * Get the user that owns the CategoryMapping
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function EventMapping(): BelongsTo
    {
        return $this->belongsTo(Event::class, 'event-id', 'id');
    }

    /**
     * Get the user that owns the CategoryMapping
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function EventCategoryMapping(): BelongsTo
    {
        return $this->belongsTo(EventCategory::class, 'category_id', 'id');
    }
}
