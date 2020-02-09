<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * @property integer $id
 * @property integer $measurement_unit_id
 * @property integer $category_id
 * @property integer $brand_id
 * @property integer $supplier_id_1
 * @property integer $supplier_id_2
 * @property integer $supplier_id_3
 * @property integer $supplier_id_4
 * @property string $barcode
 * @property string $name
 * @property string $description
 * @property float $stock
 * @property string $photo
 * @property float $cost
 * @property float $charge
 * @property float $profit
 * @property float $iva
 * @property string $observations
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 * @property Brand $brand
 * @property Category $category
 * @property MeasurementUnit $measurementUnit
 * @property Supplier $supplier1
 * @property Supplier $supplier2
 * @property Supplier $supplier3
 * @property Supplier $supplier4
 */
class Item extends Model
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
    protected $fillable = ['measurement_unit_id', 'category_id', 'brand_id', 'supplier_id_1', 'supplier_id_2', 'supplier_id_3', 'supplier_id_4', 'barcode', 'name', 'description', 'stock', 'photo', 'cost', 'charge', 'profit', 'iva', 'observations', 'created_at', 'updated_at', 'deleted_at'];

    /**
     * @return BelongsTo
     */
    public function brand()
    {
        return $this->belongsTo('App\Brand');
    }

    /**
     * @return BelongsTo
     */
    public function category()
    {
        return $this->belongsTo('App\Category');
    }

    /**
     * @return BelongsTo
     */
    public function measurementUnit()
    {
        return $this->belongsTo('App\MeasurementUnit');
    }

    /**
     * @return BelongsTo
     */
    public function supplier()
    {
        return $this->belongsTo('App\Supplier', 'supplier_id_1');
    }

    /**
     * @return BelongsTo
     */
    public function supplier2()
    {
        return $this->belongsTo('App\Supplier', 'supplier_id_2');
    }

    /**
     * @return BelongsTo
     */
    public function supplier3()
    {
        return $this->belongsTo('App\Supplier', 'supplier_id_3');
    }

    /**
     * @return BelongsTo
     */
    public function supplier4()
    {
        return $this->belongsTo('App\Supplier', 'supplier_id_4');
    }
}
