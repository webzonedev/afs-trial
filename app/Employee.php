<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    //

    protected $guarded = [];

    public function user() 
  { 
    return $this->morphOne('App\User', 'profile');
  }

  public function company()
  {
      return $this->belongsTo(Company::class);
  }


  
}
