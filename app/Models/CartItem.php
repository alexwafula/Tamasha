<?php

use Illuminate\Database\Eloquent\Model;

class CartItem extends Model
{
    protected $fillable = [
        'event_id',
        'quantity',
        'total_price',
    ];

    // Relationship with the Event model
    public function event()
    {
        return $this->belongsTo(Event::class);
    }
}