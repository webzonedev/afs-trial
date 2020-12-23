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

        public function show() {

   // Shows a single resource 
            $client = Auth::user();

            return view('/client/profile.show', ['client' => $client]);


        }

        public function edit() {

            $client = Auth::user();

            return view('/client/profile.edit', ['client' => $client]);

         
         
        }

        public function update() {

            
            $client = User::where('profile_id',Auth::user()->id)->first();

            
            $client->update([
                'firstname' => request('firstname'),
                'lastname' => request('lastname'),
                'username' => request('username'),
                'email' => request('email'),
           ]); 

               return redirect('/client/profile/');
                

        
             }

}
