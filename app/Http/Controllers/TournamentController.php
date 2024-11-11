<?php

namespace App\Http\Controllers;

use App\Models\Tournament;
use Illuminate\Http\Request;

class TournamentController extends Controller
{
    public function index()
    {
        $tournaments = Tournament::with([
            'seasons.matches.team1', 
            'seasons.matches.team2', 
            'seasons.matches.results.team'
        ])->get();

        return response()->json($tournaments);
    }
}
