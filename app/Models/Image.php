<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;

    protected $fillable = ['path', 'name', 'id_pacient'];

    public function pacient()
    {
        return $this->belongsTo(Pacient::class, 'id_pacient');
    }
}

