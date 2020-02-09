<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

/**
 * @property integer $id
 * @property integer $city_id
 * @property string $business_name
 * @property string $cuit
 * @property string $address_street
 * @property string $address_number
 * @property string $email
 * @property string $phone
 * @property string $observations
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 * @property City $city
 * @property Item $item1
 * @property Item $item2
 * @property Item $item3
 * @property Item $item4
 * @property Seller[] $sellers
 */
class Supplier extends Model
{
    /**
     * The "type" of the auto-incrementing ID.
     *
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['city_id', 'business_name', 'cuit', 'address_street', 'address_number', 'email', 'phone', 'observations', 'created_at', 'updated_at', 'deleted_at'];

    /**
     * @return BelongsTo
     */
    public function city()
    {
        return $this->belongsTo('App\City');
    }

    /**
     * @return HasOne
     */
    public function item1()
    {
        return $this->hasOne('App\Item', 'supplier_id_1');
    }

    /**
     * @return HasOne
     */
    public function item2()
    {
        return $this->hasOne('App\Item', 'supplier_id_2');
    }

    /**
     * @return HasOne
     */
    public function item3()
    {
        return $this->hasOne('App\Item', 'supplier_id_3');
    }

    /**
     * @return HasOne
     */
    public function item4()
    {
        return $this->hasOne('App\Item', 'supplier_id_4');
    }

    /**
     * @return HasMany
     */
    public function sellers()
    {
        return $this->hasMany('App\Seller');
    }
}
