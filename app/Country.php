<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $name
 * @property string $observations
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 * @property Province[] $provinces
 */
class Country extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['name', 'observations', 'created_at', 'updated_at', 'deleted_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function provinces()
    {
        return $this->hasMany('App\Province');
    }
}
