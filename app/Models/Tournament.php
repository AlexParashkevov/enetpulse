<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Tournament extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    public function seasons()
    {
        return $this->hasMany(Season::class);
    }
}
