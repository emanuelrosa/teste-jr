<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Money\Money;

class Sale extends Model
{
    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;

     /**
     * Get the seller that owns the sale.
     */
    public function seller()
    {
        return $this->belongsTo(Seller::class);
    }

    /**
     * Get the sale value.
     *
     * @param  integer  $value
     * @return Money
     */
    public function getValueAttribute($value)
    {
        return Money::BRL($value);
    }
}
