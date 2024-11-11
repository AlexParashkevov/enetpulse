<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Season extends Model
{
    use HasFactory;

    protected $fillable = ['tournament_id', 'year'];

    public function tournament()
    {
        return $this->belongsTo(Tournament::class);
    }

    public function matches()
    {
        return $this->hasMany(MatchGame::class);
    }
}
