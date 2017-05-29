<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Seller extends Model
{
    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;

    /**
     * Get the sales for the seller.
     */
    public function sales()
    {
        return $this->hasMany(Sale::class);
    }
}
