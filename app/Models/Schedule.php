<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Schedule
 *
 * @property $id
 * @property $maintance_date
 * @property $news
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Schedule extends Model
{
    
    static $rules = [
		'maintance_date' => 'required',
		'news' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['maintance_date','news'];



}
