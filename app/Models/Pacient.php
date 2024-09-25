<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pacient extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'age',
        'height',
        'weight',
        'race',
        'doctor_id',
        'relapses',
    ];

    public function diagnosticos()
    {
        return $this->hasMany(Diagnosis::class, 'pacient_id');
    }
}