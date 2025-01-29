<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rain extends Model
{
    use HasFactory;

    protected $table = 'rain';

    // Define fillable fields to allow mass assignment
    protected $fillable = [
        'duration_minutes',
        'amount_mm',
        'zone_in_risk',
        'city_id',
    ];

    // Define relationships (if any)
    public function city()
    {
        return $this->belongsTo(City::class);
    }
}
