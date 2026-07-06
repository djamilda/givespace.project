<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Campaign extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'target_amount',
        'is_active',
    ];

    protected $casts = [
        'is_active' => 'boolean',
        'target_amount' => 'integer',
    ];

    public function donations()
    {
        return $this->hasMany(Donation::class);
    }
}
