<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'persons';
    /**
     * Fields that can be mass assigned.
     *
     * @var array
     */
    protected $fillable = [
    	'name',
    	'lastname',
    	'identification',
    	'user_id'
    ];

    /**
     * person belongs to User.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
    	// belongsTo(RelatedModel, foreignKey = user_id, keyOnRelatedModel = id)
    	return $this->belongsTo(User::class);
    }
}
