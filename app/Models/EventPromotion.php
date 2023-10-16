<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class EventPromotion extends Model
{
    use HasFactory;
    protected $guarded = [];

    /**
     * Get the user that owns the EventPromotion
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function EventPromotion(): BelongsTo
    {
        return $this->belongsTo(Event::class, 'event_id', 'id');
    }
}
