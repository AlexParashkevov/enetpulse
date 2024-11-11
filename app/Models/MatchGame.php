<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class MatchGame extends Model
{
    protected $table = 'matches';

    use HasFactory;

    protected $fillable = ['season_id', 'team1_id', 'team2_id', 'match_date'];

    public function season()
    {
        return $this->belongsTo(Season::class);
    }

    public function team1()
    {
        return $this->belongsTo(Team::class, 'team1_id');
    }

    public function team2()
    {
        return $this->belongsTo(Team::class, 'team2_id');
    }

    public function results()
    {
        return $this->hasMany(Result::class, 'match_id');
    }

    public function getTeam1NameAttribute()
    {
        return $this->team1 ? $this->team1->name : 'Unknown Team';
    }

    public function getTeam2NameAttribute()
    {
        return $this->team2 ? $this->team2->name : 'Unknown Team';
    }
}
