<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    protected $table='shops';
    protected $fillable=['shop_name','owner_name',
        'phone','tsp_id','address',
        'approve_person','register_number',
        'approve_date','status'];
}
