<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $table = 'tasks';
    protected $fillable = ['name', 'deadline'];
    protected $with = ['actor'];

    public function consumptions(){
        return $this->hasMany(Consumption::class);
    }

    public function actor()
    {
        return $this->belongsTo(Actor::class);
    }

    public function scopeMine($query)
    {
        return $query->whereUserId(auth()->actor()->id);
    }


}
