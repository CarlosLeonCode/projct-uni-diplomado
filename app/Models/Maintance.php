<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Maintance
 *
 * @property $id
 * @property $maintance_started_at
 * @property $maintance_finished_at
 * @property $maintance_type
 * @property $status
 * @property $cylinder_id
 * @property $created_at
 * @property $updated_at
 *
 * @property Cylinder $cylinder
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Maintance extends Model
{

    static $rules = [
		'maintance_started_at' => 'required',
		'maintance_finished_at' => 'required',
		'maintance_type' => 'required',
		'status' => 'required',
		'cylinder_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['maintance_started_at','maintance_finished_at','maintance_type','status','cylinder_id','schedule_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function cylinder()
    {
        return $this->hasOne('App\Models\Cylinder', 'id', 'cylinder_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function schedule()
    {
        return $this->hasOne('App\Models\Schedule', 'id', 'schedule_id');
    }

}
