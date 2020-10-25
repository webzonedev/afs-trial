<?php

namespace App\Http\Controllers\Employee;

use ILluminate\Support\Facades\Auth;
use App\Http\Controllers\Controller as Controller;
use App\Employee;


class EmployeeController extends Controller
{
    //

    
       
     /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function show_info(){
        
        $employee = Employee::find(Auth::user()->profile_id);
        // Renders a list of a resource
        return view('/employee/employee_home', ['employee' => $employee]);
    }



    
}
