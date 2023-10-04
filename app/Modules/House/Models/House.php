<?php

namespace App\Modules\House\Models;

use App\Modules\Customer\Models\Customer;
use App\Modules\House\Models\HouseRoom;
use App\Modules\Realtor\Models\Realtor;
use App\Modules\Room\Models\Room;
use Illuminate\Database\Eloquent\Model;

class House extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'bathrooms',
        'bedrooms',
        'basement',
        'gross_size',
        'spaces',
        'parking_features',
        'property_stories',
        'structure_type',
        'lot_size',
        'location',
        'foundation_type',
        'tax_accessed_value',
        'annual_tax_amount',
        'sale_date',
        'sale_amount',
        'type',
        'year_built',
        'realtor_id',
        'customer_id',
        'address',
    ];

    // relations

    public function realtor(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Realtor::class);
    }

    public function customer(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Customer::class);
    }


    public function images(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(HouseImage::class);
    }

    public function rooms(): \Illuminate\Database\Eloquent\Relations\belongsToMany
    {
        return $this->belongsToMany(Room::class);
    }
}
