<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'comment',
        'pacient_id',
        'created_at',
    ];

    public function pacient()
    {
        return $this->belongsTo(Pacient::class, 'pacient_id');
    }
}

