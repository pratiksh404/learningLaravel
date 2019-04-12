<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    public function scopeActive($query)
        {
            return $query->where('active','1');
        }
    public function scopeInactive($query)
        {
            return $query->where('active','0');
        }
    
        /* protected $fillable = [
            'name','phone','contact','address','active','email'
        ]; */

        protected $guarded = [];

        public function company(){
           return $this->belongsTo(Company::class);
        }

       

        /* Accessors and mutators */
        /* public function getActiveAttribute($attr)
            {
                return [
                    0 => "active",
                    1 => "inactive",
                ][$attr];
            } */

}
