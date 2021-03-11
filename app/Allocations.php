<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class Allocations extends Model
{
    protected $table = 'allocations';

    public function resolveChildRouteBinding($childType, $value, $field)
    {
        // TODO: Implement resolveChildRouteBinding() method.
    }

    public static function findByType($allocationType)
    {
        return self::where('allocation_type',$allocationType)->get();
    }

    /**
     * Get the school for the allocation type.
     */
    public function school()
    {
        return $this->belongsTo('App\Teacher','school_id');
    }
}

