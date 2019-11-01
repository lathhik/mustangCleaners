<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CustomerOrder extends Model
{
    protected $table = 'customers_orders';


    public function serviceType()
    {
        return $this->belongsTo(ServiceType::class,'service_type');
    }

    public function orderStatus()
    {
        return $this->belongsTo(OrderStatus::class,'order_status_id');
    }

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }

    public function pickUpAddress()
    {
        return $this->belongsTo(Address::class,'pickup_address_id');
    }
    public function deliveryAddress()
    {
        return $this->belongsTo(Address::class,'delivery_address_id');
    }
}
