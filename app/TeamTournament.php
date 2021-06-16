<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TeamTournament extends Model
{
    protected $table = 'team_tournaments';

    protected $with = ['teams', 'tournaments'];

    protected $fillable = ['team_id', 'tournament_id'];

    public function teams() {
        return $this->belongsTo(Team::class, 'team_id');
    }

    public function tournaments() {
        return $this->belongsTo(Tournaments::class, 'tournament_id');
    }
}
