<?php

namespace soyDeporte;

use Illuminate\Database\Eloquent\Model;

class Coment extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'texto', 'user_id','post_id',
    ];
}
