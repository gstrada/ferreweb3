<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $first_name
 * @property string $last_name
 * @property string $identification_type
 * @property string $identification_number
 * @property string $address_street
 * @property string $address_number
 * @property integer $city_id
 * @property string $email
 * @property string $phone
 * @property string $observations
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 */
class Customer extends Model
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
    protected $fillable = ['first_name', 'last_name', 'identification_type', 'identification_number', 'address_street', 'address_number', 'city_id', 'email', 'phone', 'observations', 'created_at', 'updated_at', 'deleted_at'];

}
