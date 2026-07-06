<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Donation extends Model
{
    use HasFactory;

    protected $fillable = [
        'campaign_id',
        'amount',
        'donor_name',
        'donor_email',
        'message',
    ];

    public function campaign()
    {
        return $this->belongsTo(Campaign::class);
    }
}
