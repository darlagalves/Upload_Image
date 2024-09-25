<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;

    protected $fillable = ['path', 'name', 'doctor_id'];

    public function user()
    {
        return $this->belongsTo(User::class, 'doctor_id');
    }
}

