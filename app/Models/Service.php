<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'price',
        'duration'
    ];

    public function appointment()
    {
        return $this->hasMany(Appointment::class);
    }

    public function slots()
    {
        return $this->hasMany(Slot::class);
    }
}