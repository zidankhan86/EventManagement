<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Attendee extends Model
{
    use HasFactory;
    protected $guarded = [];


    /**
     * Get the user that owns the Attendee
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    /**
     * Get the user that owns the Attendee
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function Events(): BelongsTo
    {
        return $this->belongsTo(Event::class, 'event_id', 'id');
    }
}
