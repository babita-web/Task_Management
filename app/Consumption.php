<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Consumption extends Model
{

    protected $fillable = [
         'actor_id', 'task_id', 'stop', 'start'
    ];

    protected $tasks = ['start', 'stop'];

    /**
     * {@inheritDoc}
     */
    protected $with = ['actor'];


    public function actor()
    {
        return $this->belongsTo(Actor::class);
    }


    /**
     * Get timer for current user.
     *
     * @param  \Illuminate\Database\Eloquent\Builder $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeMine($query)
    {
        return $query->whereActorId(actor()->id);
    }

    /**
     * Get the running timers
     *
     * @param  \Illuminate\Database\Eloquent\Builder $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeRunning($query)
    {
        return $query->whereNull('stop');
    }
    public function tasks()
    {
        return $this->belongsto(Task::class);
    }


}
