<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class My_files extends Model
{
    

    protected $guarded = [];

    public function company()
    {
        return $this->belongsTo(Company::class);
    }

    public function employee()
    {
        return $this->belongsTo(Employee::class);
    }



}