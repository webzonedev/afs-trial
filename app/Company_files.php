<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company_files extends Model
{
    

    protected $guarded = [];

    public function company()
    {
        return $this->belongsTo(Company::class);
    }



}