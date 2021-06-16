<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    protected $fillable = [
        'name',
        'phone',
        'description'
    ];

    public function teamTournaments() {
        return $this->hasMany(TeamTournament::class);
    }
}
