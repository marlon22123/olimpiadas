<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Escuela extends Model
{
    use HasFactory;

    protected $fillable = [
        "name",
        "facultad_id"
    ];

    public function facultad()
    {
        return $this->belongsTo(Facultad::class);
    }
}
