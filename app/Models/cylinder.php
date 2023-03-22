<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Cylinder
 *
 * @property $id
 * @property $size
 * @property $lote
 * @property $status
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Cylinder extends Model
{
    
    static $rules = [
		'size' => 'required',
		'lote' => 'required',
		'status' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['size','lote','status'];



}
