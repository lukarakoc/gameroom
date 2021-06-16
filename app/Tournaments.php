<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tournaments extends Model
{
    protected $fillable = [
        'name',
        'cost',
        'price',
        'photo',
        'description'
    ];

    public function teamTournament() {
        return $this->belongsTo(TeamTournament::class);
    }
}
