<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CustomerOrder extends Model
{
    protected $table = 'customers_orders';


    public function serviceType()
    {
        return $this->belongsTo(ServiceType::class);
    }

    public function orderStatus()
    {
        return $this->belongsTo(OrderStatus::class);
    }

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }
}