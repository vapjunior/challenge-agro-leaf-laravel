<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
        /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'description', 'polygon_id_agroapi', 'lat', 'lng','latp1', 'lngp1','latp2', 'lngp2','latp3', 'lngp3','latp4', 'lngp4'
    ];
}
