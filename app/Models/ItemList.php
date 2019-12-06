<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ItemList extends Model
{
    protected $table = 'items_lists';

    public function serviceType()
    {
        return $this->belongsTo(ServiceType::class, 'service_type_id');
    }
}
