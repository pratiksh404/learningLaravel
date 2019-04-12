<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $guarded = [];
    // setting mass assignment turned off

    public function customers(){
        return $this->hasMany(Customer::class);
    }
}
