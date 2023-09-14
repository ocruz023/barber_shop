<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Stylist extends Model
{
    protected $fillable = [
        'id_branch','name'
    ];

    public function Branch()
    {
        return $this->belongsTo(Branch::class, 'id_branch');
    }

    public function Appointment()
    {
        return $this->hasMany(Appointment::class, 'id_stylist');
    }
}
