<?php

namespace App\Http\Controllers\Client;

use ILluminate\Support\Facades\Auth;
use App\Employee;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller as Controller;
use App\Company;
use App\User;
use Illuminate\Support\Facades\Hash;

class EmployeesController extends Controller
{


            /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function register_employee(Company $company){

        // Shows a view to create a new resource
        
        if($company->client_id == Auth::user()->profile_id) 

           return view('/client/employees.register_employee',compact('company'));

        else
            return abort(403);

    }


    public function store_employee(Company $company){


        $user = User::create(request()->validate([
            'firstname' => ['required', 'string', 'max:255'],
            'lastname' => ['required', 'string', 'max:255'],
            'username' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]));
        
        
        $user->password = Hash::make($user->password );
        $user->save();

        $profile = \App\Employee::create(['company_id'=>$company->id , 'e_uname'=>$user->username]);
        $profile->user()->save(User::find($user->id));

        return redirect('/client/companies/'.$company->id. '/employees/');





    }


    public function index_all()
    {
          // Renders a list of a resource
          $companies=Company::where('client_id',Auth::user()->profile_id)->get();
          
          if($companies!=null){
          $employees = collect(new Employee);
          
          foreach($companies as $company){
              $employees->push(Employee::where('company_id',$company->id)->get());
            }

            $employees = $employees->collapse();

       
            return view('/client/employees.index_all', ['employees' => $employees]);
        }
        else 
            return view('/client/employees.index_all');

        

        
    }

    public function index_single(Company $company)
    {
          // Renders a list of a resource
        if($company->client_id == Auth::user()->profile_id) {

        $employees=Employee::where('company_id',$company->id)->get();

        return view('/client/employees.index_single', ['company' => $company , 'employees' => $employees]);

        }
        else return abort(403);
        
    }

    public function show_info(Company $company,Employee $employee){
        
        // Shows a single resource 
        if($company->client_id == Auth::user()->profile_id) {

            if($employee->company_id == $company->id)
                return view('/client/employees.show_info', ['company' => $company , 'employee' => $employee]);
            else return abort(404);
        }

        else
            return abort(403);
    }




    public function create_info(Company $company){

        // Shows a view to create a new resource
        
        if($company->client_id == Auth::user()->profile_id) 

           return view('/client/employees.create_info');

        else
            return abort(403);

    }

    public function store_info(Company $company){

        // Persists the new resource



    }



    public function edit_info(Company $company){

        // Shows a view to edit an existing resource

        if($company->client_id == Auth::user()->profile_id)
            return view('/client/companies.edit_info' , compact('company'));
        else
            return abort(403);

    }

    public function update_info(Company $company){

        // Persists the edited resource
        
       $company->update(request()->validate([

        'c_name' => 'required',
        'c_email' => 'required',
        'c_type' => 'required'

       ])); 

        return redirect('/client/companies/' . $company->id);



    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function destroy(Employee $employee)
    {
        //
    }
}
