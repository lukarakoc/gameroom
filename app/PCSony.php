<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PCSony extends Model
{
    protected $table = 'pc_sonies';
    protected $fillable = ['name', 'status', 'start_time', 'end_time'];

    public function status() {
        return $this->hasMany(Status::class);
    }
}
