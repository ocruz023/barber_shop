<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Drink extends Model
{
    protected $fillable = [
        'name'
    ];
    
    public function Appointment()
    {
        return $this->hasMany(Appointment::class, 'id_drink');
    }
}