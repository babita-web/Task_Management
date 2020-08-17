<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Cache;

class Actor extends Model
{
    protected $table = 'actors';
    protected $fillable =  ['firstname','lastname','email', 'password',];

    public function users()
    {
        return $this->belongsTo('App\User');
    }

    public function IsUserActive()
    {
        return Cache::has('user-is-active' . $this->id);
    }
}
