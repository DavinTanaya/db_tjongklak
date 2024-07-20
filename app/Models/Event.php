<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Event extends Model
{
    use HasFactory;

    protected $fillable = [
        'event_name',
        'event_date',
        'event_location',
        'description',
    ];

    public function eventImages(): HasMany
    {
        return $this->hasMany(EventImage::class, 'event_id');
    }
}
