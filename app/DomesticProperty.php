<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DomesticProperty extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'domestic_properties';

    /**
     * Fields that can be mass assigned.
     *
     * @var array
     */
    protected $fillable = [
    		'property_id',
            'bathrooms_number',
            'bedrooms_number',
            'garages_number',
    ];

    /**
     * DomesticProperty belongs to Property.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function property()
    {
    	// belongsTo(RelatedModel, foreignKey = property_id, keyOnRelatedModel = id)
    	return $this->belongsTo(Property::class);
    }
}
