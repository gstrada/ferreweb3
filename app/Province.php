<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * @property integer $id
 * @property int $country_id
 * @property string $name
 * @property string $observations
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 * @property Country $country
 * @property City[] $cities
 */
class Province extends Model
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
    protected $fillable = ['country_id', 'name', 'observations', 'created_at', 'updated_at', 'deleted_at'];

    /**
     * @return BelongsTo
     */
    public function country()
    {
        return $this->belongsTo('App\Country');
    }

    /**
     * @return HasMany
     */
    public function cities()
    {
        return $this->hasMany('App\City');
    }

    /**
     * @param $id
     * @return void | mixed
     */
    public function getCities($id) {

        return City::all()->where('province_id', $id)->sortBy('name')->toArray();

    }
}
