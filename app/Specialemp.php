<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Specialemp extends Model
{
    //

    protected $guarded = [];

    public function company()
    {
        return $this->belongsTo(Company::class);
    }


}
