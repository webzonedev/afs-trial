<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class adminTasks_instances extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $guarded = [] ;

    
    public function adminTasks()
    {
        return $this->belongsTo(adminTasks::class);
    }
}
