<?php

namespace App\Http\Controllers\Client;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller as Controller;
use App\Client;
use App\Company;
use App\Employee;
use Illuminate\Support\Facades\Auth;

class ClientController extends Controller
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


    public function index(){
        
        // Renders a list of a resource
        $companies=Company::where('client_id',Auth::user()->profile_id)->get();

        if($companies!=null){
        $employees = collect(new Employee);
        
        foreach($companies as $company){
            $employees->push(Employee::where('company_id',$company->id)->get());
          }

          $employees = $employees->collapse();

          
          return view('/client/client_home' , ['companies'=> $companies , 'employees'=>$employees]);
        }
        else 
        return view('/client/client_home');

    
}

}
