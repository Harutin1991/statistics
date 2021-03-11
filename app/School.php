<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class School extends Model
{
    protected $table = 'school';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'school_name', 'org_id'
    ];

    public function resolveChildRouteBinding($childType, $value, $field)
    {
        // TODO: Implement resolveChildRouteBinding() method.
    }

}
