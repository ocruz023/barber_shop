<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillable = [
        'name','description','price','duration'
    ];

    public function appointments()
    {
        return $this->hasMany(Appointment::class, 'id_service');
    } 
}