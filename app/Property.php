<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Property extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'code', 'state', 'area', 'type', 'price', 'user_id',
    ];

    public function tipo()
    {
        return $propiedad = Property::all();
    }

}
