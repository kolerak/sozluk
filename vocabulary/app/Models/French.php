<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class French extends Model
{
    use HasFactory;

    protected $fillable = ['word'];
    protected $table = 'french';

    public function turkish()
    {
        return $this->belongsToMany(Turkish::class, 'french_turkish');
    }
}