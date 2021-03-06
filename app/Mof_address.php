<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mof_address extends Model
{
    //

    protected $primaryKey = 'company_id';
    public $incrementing = false;

    protected $guarded = [];


    public function company()
    {
        return $this->belongsTo(Company::class);
    }

    
}
