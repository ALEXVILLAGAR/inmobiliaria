<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Auth;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'email', 'password','active'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * User has one Company.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function company()
    {
        // hasOne(RelatedModel, foreignKeyOnRelatedModel = user_id, localKey = id)
        return $this->hasOne(Company::class);
    }

    /**
     * User has one Person.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function person()
    {
        // hasOne(RelatedModel, foreignKeyOnRelatedModel = user_id, localKey = id)
        return $this->hasOne(Person::class);
    }

    public function name(){
        return Auth::user()->person != null ? Auth::user()->person->name : 
        Auth::user()->company->name; 
    }

}
