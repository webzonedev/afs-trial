<?php


namespace App\Http\Controllers\Client;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use ILluminate\Support\Facades\Auth;
use App\Http\Controllers\Controller as Controller;
use App\Company;
use App\Company_files;
use Doctrine\DBAL\Driver\SQLSrv\LastInsertId;

class CompanyFilesController extends Controller
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


    public function index_files(Company $company){
        
        // Shows a single resource 
        if($company->client_id == Auth::user()->profile_id) {
            
            $files = $company->company_files;

            


            return view('/client/companies.index_files', ['company' => $company , 'files'=>$files]);

        }

        else
            return abort(403);
    }


    public function download_files(Company $company, $id){

        // Shows a view to edit an existing resource
        if($company->client_id == Auth::user()->profile_id) {
            
            $files=Company_files::find($id);

            return Storage::download($files->filepath);         

        }
    }
   

    public function before_upload_files(Company $company){

        // Shows a view to edit an existing resource
        if($company->client_id == Auth::user()->profile_id) {
            
            $files=$company->company_files;

            
         

            return view('/client/companies.upload_files' , ['company' => $company , 'files'=>$files]);
        }
        else  return abort(403);
    }

    public function upload_files(Company $company){

        // Shows a view to edit an existing resource

            
        
        $files = request('tasjil_sherke');

        $count=0;
        if($files!=null){
            foreach ($files as $file) {
                if($file!=null){
                
            
               $f= Company_files::updateOrCreate(
                
                    ['company_id' => $company->id,
                     'filepath' => $file->storeAs('companyfiles/'.$company->id.'/sijil_tijare_files/tasjil_sherke' , 'st_ts_'. uniqid()),
                     'filetitle' => 'tasjil_sherke',
                     'category' => 'sijil_tijare_files'
                    ]
                );

                if((!$f->wasRecentlyCreated && $f->wasChanged()) || $f->wasRecentlyCreated){
                    $count++;
                }
                
                if(!$f->wasRecentlyCreated && !$f->wasChanged()){
                    $count=0;
                }
                
               

                }

              

            }
     
           
        }
        
        if($count>0)
            return response()->json(['msg'=>'تم التّرفيع بنجاح']);
        else
             return response()->json(['msg'=>'لم يتم التّرفيع']);
            
        

         

            // Company_files::updateOrCreate(
            //   ['company_id' => $company->id,
            //   'filepath' => Company_files::req_file('shhedet_tasjil_sijil','companyfiles'),
            //   'filetitle' => 'shhedit_tasjil_sijil',
            //   'category' => 'sijil_tijare_files'
            //   ]
            // );

            // Company_files::updateOrCreate(
            //   ['company_id' => $company->id,
            //  'filepath' => Company_files::req_file('mahdar_jam3yye','companyfiles'),
            //  'filetitle' => 'mahdar_jam3yye',
            //  'category' => 'sijil_tijare_files'
            //  ]);

            //     Company_files::updateOrCreate(
            //     ['company_id' => $company->id,
            //     'filepath' => Company_files::req_file('itifa2yet_mohame','companyfiles'),
            //     'filetitle' => 'itifa2yet_mohame',
            //     'category' => 'sijil_tijare_files'
            //     ]);

            //     Company_files::updateOrCreate(
            // ['company_id' => $company->id,
            // 'filepath' => Company_files::req_file('ifedet_woko3at','companyfiles'),
            // 'filetitle' => 'ifedet_woko3at',
            // 'category' => 'sijil_tijare_files'
            //         ]);

            //     Company_files::updateOrCreate(
            //     ['company_id' => $company->id,
            //     'filepath' => Company_files::req_file('others1','companyfiles'),
            //     'filetitle' => 'others1',
            //     'category' => 'sijil_tijare_files'
            //     ]);


            //     Company_files::updateOrCreate(
            //     ['company_id' => $company->id,
            //     'filepath' => Company_files::req_file('tasjil_meliyye','companyfiles'),
            //     'filetitle' => 'tasjil_meliyye',
            //     'category' => 'mof_files'
            //     ]);


            //     Company_files::updateOrCreate(
            //         ['company_id' => $company->id,
            //         'filepath' => Company_files::req_file('tasjil_vat','companyfiles'),
            //         'filetitle' => 'tasjil_vat',
            //         'category' => 'mof_files'
            //     ]);

            //     Company_files::updateOrCreate(
            //     ['company_id' => $company->id,
            //     'filepath' => Company_files::req_file('mobeshrit_3amal','companyfiles'),
            //     'filetitle' => 'mobeshrit_3amal',
            //     'category' => 'mof_files'
            //     ]);


            //     Company_files::updateOrCreate(
            //     ['company_id' => $company->id,
            //     'filepath' => Company_files::req_file('others2','companyfiles'),
            //     'filetitle' => 'others2',
            //     'category' => 'mof_files'
            //     ]);


            //     Company_files::updateOrCreate(
            //     ['company_id' => $company->id,
            //     'filepath' => Company_files::req_file('shhedit_tasjil_ssn','companyfiles'),
            //     'filetitle' => 'shhedit_tasjil_ssn',
            //     'category' => 'ssn_files'
            //     ]);

            //     Company_files::updateOrCreate(
            //     ['company_id' => $company->id,
            //     'filepath' => Company_files::req_file('others3','companyfiles'),
            //     'filetitle' => 'others3',
            //     'category' => 'ssn_files'
            // ]);
            // Company_files::updateOrCreate(
            // ['company_id' => $company->id,
            // 'filepath' => Company_files::req_file('others4','companyfiles'),
            // 'filetitle' => 'others4',
            // 'category' => 'others'
            // ]);
            


           
        }





    public function update_files(Company $company){

        // Persists the edited resource
   



    }
}
