<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fire extends Model
{
    use HasFactory;

    // Define the table associated with the model (optional if the table name follows Laravel's naming convention)
    protected $table = 'fires';

    // Define fillable fields to allow mass assignment
    protected $fillable = [
        'cause',
        'city_id',
        'affected_area_km',
    ];

    // Define relationships (if any)
    public function city()
    {
        return $this->belongsTo(City::class);
    }
}