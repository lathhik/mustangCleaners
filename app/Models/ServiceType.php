<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ServiceType extends Model
{
    protected $table = 'service_types';

    public function items()
    {
        return $this->hasMany(ItemList::class);
    }

}
