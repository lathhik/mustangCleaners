<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $table = 'carts';
    protected $fillable=['user_id', 'item_id', 'quantity', 'total', 'grand_total'];

    public function items()
    {
        return $this->belongsTo(ItemList::class, 'item_id');
    }

    public function customers()
    {
        return $this->belongsTo(Customer::class, 'user_id');
    }
}
