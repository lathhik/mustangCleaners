<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    protected $table = 'order_items';

    public function item()
    {
        return $this->hasMany(ItemList::class, 'item_id');
    }

    public function order()
    {
        return $this->belongsTo(CustomerOrder::class, 'order_id');
    }
}
