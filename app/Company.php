<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    //

    protected $guarded = [];


    public function mof_address()
    {
        return $this->hasOne(Mof_address::class);
    }

    public function ssn_address()
    {
        return $this->hasOne(Ssn_address::class);
    }

    public function client()
    {
        return $this->belongsTo(Client::class);
    }

    public function employee()
    {
        return $this->hasMany(Employee::class);
    }

    public function specialemp()
    {
        return $this->hasMany(Specialemp::class);
    }

    public function company_files()
    {
        return $this->hasMany(Company_files::class);
    }


    
}