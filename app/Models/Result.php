<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Result extends Model
{
    use HasFactory;

    protected $fillable = ['match_id', 'team_id', 'score'];

    public function match()
    {
        return $this->belongsTo(MatchGame::class, 'match_id');
    }

    public function team()
    {
        return $this->belongsTo(Team::class, 'team_id');
    }

    public function getTeamNameAttribute()
    {
        return $this->team ? $this->team->name : 'Unknown Team';
    }
}
