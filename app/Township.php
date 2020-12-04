<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Township extends Model
{
    protected $table='townships';
    protected $fillable=['tsp_name','tsp_code'];
}
