<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;


class Voter extends Model
{
    //
    use Sortable;
    
    public $sortable = ['brgy', 'precinct', 'position'];

    public function leaderdetails()
    {
        return $this->hasMany('App\Leaderslist', 'leaderid', 'id');
    }
}
