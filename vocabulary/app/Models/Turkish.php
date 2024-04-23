<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Turkish extends Model
{
    use HasFactory;

    protected $fillable = ['word'];
    protected $table = 'turkish';

    public function french()
    {
        return $this->belongsToMany(French::class, 'french_turkish');
    }
}