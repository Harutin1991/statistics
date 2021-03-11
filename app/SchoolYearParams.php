<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class SchoolYearParams extends Model
{
    protected $table = 'school_year_params';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'school_id'
    ];

    public function resolveChildRouteBinding($childType, $value, $field)
    {
        // TODO: Implement resolveChildRouteBinding() method.
    }

}
