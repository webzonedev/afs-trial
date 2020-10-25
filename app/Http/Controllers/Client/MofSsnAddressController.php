<?php

namespace App\Http\Controllers\Client;

use ILluminate\Support\Facades\Auth;
use App\Http\Controllers\Controller as Controller;
use App\Mof_address;
use App\Company;

class MofSsnAddressController extends Controller
{
    //

    public function show_mof_ssn_address(Company $company){
        
        // Shows a single resource 
        if($company->client_id == Auth::user()->profile_id) {

            $mof_address=$company->mof_address;
            $ssn_address=$company->ssn_address;

            return view('/client/companies.show_mof_ssn_address', ['company' => $company , 'mof_address' => $mof_address , 'ssn_address' => $ssn_address]);

        }

        else
            return abort(403);
    }

    public function create_mof_ssn_address(Company $company){

        // Shows a view to create a new resource

        if($company->client_id == Auth::user()->profile_id) 
             return view('/client/companies.create_mof_ssn_address' , compact('company'));
        
        else  return abort(403);


    }

    public function store_mof_ssn_address(Company $company){


        Mof_address::updateOrCreate(

            
            [
                'company_id'    => $company->id,
                
            ], 

            [
                'governorate'  => request('governorate'),
                'district' => request('district'),
                'street' => request('street'),
                'neighborhood' => request('neighborhood'),
                'real_estate_area' => request('real_estate_area'),
                'division_number' => request('division_number'),
                'building' => request('building'),
                'floor' => request('floor'),
                'phone' => request('phone'),
                'fax' => request('fax'),
                'mailbox' => request('mailbox'),
                'region' => request('region'),
                'changed_date' => request('changed_date')
            ]

        );

        Ssn_address::updateOrCreate(

            
            [
                'company_id'    => $company->id,
                
            ], 

            [
                'governorate'  => request('governorate'),
                'district' => request('district'),
                'street' => request('street'),
                'neighborhood' => request('neighborhood'),
                'real_estate_area' => request('real_estate_area'),
                'division_number' => request('division_number'),
                'building' => request('building'),
                'floor' => request('floor'),
                'phone' => request('phone'),
                'fax' => request('fax'),
                'mailbox' => request('mailbox'),
                'region' => request('region'),
                'changed_date' => request('changed_date')
            ]

        );
        

        return redirect('/client/companies/'.$company->id.'/mof_ssn_address');

    }

    public function edit_mof_ssn_address(Company $company){

        // Shows a view to edit an existing resource
        if($company->client_id == Auth::user()->profile_id) {
            
            $mof_address=Mof_address::where('company_id',$company->id)->first();

            return view('/client/companies.edit_mof_ssn_address' , ['company' => $company , 'mof_address' => $mof_address]);
        }
        else  return abort(403);
    }

    public function update_mof_ssn_address(Company $company){

        // Persists the edited resource
        
        Mof_address::updateOrCreate(

            
            [
                'company_id'    => $company->id,
                
            ], 

            [
                'governorate'  => request('governorate'),
                'district' => request('district'),
            ]

        );


        

            
        return redirect('/client/companies/' . $company->id . '/mof_ssn_address');



    }


}
