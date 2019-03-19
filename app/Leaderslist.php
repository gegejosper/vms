<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Leaderslist extends Model
{
    //
    public function leader()
    {
        return $this->belongsTo('App\Voter', 'leaderid', 'id');
    }
    public function voters()
    {
        return $this->belongsTo('App\Voter','votersid', 'id');
    }
    public function leaderlist()
    {
        return $this->hasMany('App\Voter','votersid', 'id');
    }
}
