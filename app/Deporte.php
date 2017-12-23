<?php

namespace soyDeporte;

use Illuminate\Database\Eloquent\Model;


class Deporte extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'deporte',
    ];
}
