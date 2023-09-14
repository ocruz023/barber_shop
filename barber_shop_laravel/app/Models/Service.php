<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillable = [
        'name','description','price','duration'
    ];

    public function Appointment()
    {
        return $this->hasMany(Appointment::class, 'id_service');
    } 
}