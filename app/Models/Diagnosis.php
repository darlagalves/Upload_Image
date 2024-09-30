<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Diagnosis extends Model
{
    use HasFactory;

    protected $table = 'diagnosis';

    protected $fillable = ['pacient_id', 'comment'];

    public function paciente()
    {
        return $this->belongsTo(Pacient::class, 'pacient_id');
    }
}
