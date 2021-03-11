<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class SchoolYearReference extends Model
{
    protected $table = 'school_year_reference';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'school_id', 'school_year_id','allocation_id','school_year_param_id'
    ];

    public function resolveChildRouteBinding($childType, $value, $field)
    {
        // TODO: Implement resolveChildRouteBinding() method.
    }

    public static function findByAllocationId($allocationId)
    {
        return self::where('allocation_id',$allocationId)->get();
    }
}
