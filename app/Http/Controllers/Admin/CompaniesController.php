<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller as Controller;
use App\Company;

class CompaniesController extends Controller
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
    
    public function index(){
        
        // Renders a list of a resource

        $companies = Company::latest()->get();

        return view('/admin/companies.index', ['companies' => $companies]);
    }

    
    public function show_info($id){
        
        // Shows a single resource 

        $company = Company::find($id);

        return view('/admin/companies.show_info', ['company' => $company]);


    }

    public function show_mof_address($id){
        
        // Shows a single resource 

        $company = Company::find($id);

        return view('/admin/companies.show_mof_address', ['company' => $company]);


    }

    public function show_ssn_address($id){
        
        // Shows a single resource 

        $company = Company::find($id);

        return view('/admin/companies.show_ssn_address', ['company' => $company]);


    }

    // public function create(){

    //     // Shows a view to create a new resource

    // }

    // public function store(){

    //     // Persists the new resource

    // }

    // public function edit(){

    //     // Shows a view to edit an existing resource

    // }

    // public function update(){

    //     // Persists the edited resource

    // }

    public function destroy(){

        // Deletes the resource

    }




}
