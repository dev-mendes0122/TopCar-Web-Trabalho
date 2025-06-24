<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CarroFixo extends Model
{
    protected $table = 'carros_fixos';
    protected $guarded = [];

    public $timestamps = true;

    protected static function boot()
    {
        parent::boot();

        static::updating(function () {
            return false;
        });

        static::deleting(function () {
            return false;
        });
    }
}
