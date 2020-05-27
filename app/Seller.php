<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $name
 * @property string $email
 * @property string $phone
 * @property string $observations
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 */
class Seller extends Model
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
    protected $fillable = [
        'supplier_id',
        'first_name',
        'last_name',
        'email',
        'phone',
        'observations',
        'created_at',
        'updated_at',
        'deleted_at'
    ];

}
