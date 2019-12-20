<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CustomerBag extends Model
{
    protected $table = 'customers_bags';

    public function customer()
    {
        return $this->belongsTo(Customer::class, 'customer_id');
    }
}
