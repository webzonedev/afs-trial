@extends ('client/layout')

@section ('client_home_content')

<!-- Begin Page Content -->
<div class="container-fluid">



<!-- Content Row -->
<div class="row">

  <!-- Earnings (Monthly) Card Example -->
  <div class="col-xl-2 col-md-6 mb-4">
    <div class="card border-left-danger shadow h-100">
      <div class="card-body">
        <div class="row no-gutters align-items-center">
          <div class="col mr-2">
            <div class="text-xs font-weight-bold text-gray-800 text-uppercase mb-1">
            <a href="/client/companies/{{$company->id}}" class="myCardLink ">معلومات الشركة</a> <i class="text-danger fas fa-info-circle"></i> </div>
          </div>
          
        </div>
      </div>
    </div>
  </div>

  <!-- Earnings (Monthly) Card Example -->
  <div class="col-xl-4 col-md-6 mb-4">
    <div class="card border-left-danger shadow h-100">
      <div class="card-body">
        <div class="row no-gutters align-items-center">
          <div class="col mr-2">
            <div class="text-xs font-weight-bold text-gray-800 text-uppercase mb-1">
            <a href="/client/companies/{{$company->id}}/mof_ssn_address" class="myCardLink "> العنوان لدى وزارة المالية و الضمان الاجتماعي</a> <i class="text-danger fas fa-address-card"></i> </div>
            
          </div>
         
        </div>
      </div>
    </div>
  </div>


       <!-- Earnings (Monthly) Card Example -->
       <div class="col-xl-2 col-md-6 mb-4 " >
    <div class="card border-left-danger shadow h-100">
      <div class="card-body">
        <div class="row no-gutters align-items-center smallcardSize">
          <div class="col mr-2">
            <div class="text-xs font-weight-bold text-gray-800 text-uppercase mb-1">
            <a href="/client/companies/{{$company->id}}/lawyer/" class="myCardLink">محامي الشّركة</a> <i class="text-danger fas fa-gavel"></i> </div>
           
           
          </div>
        
        </div>
      </div>
    </div>
  </div>


    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-2 col-md-6 mb-4 " >
    <div class="card border-left-danger shadow h-100">
      <div class="card-body">
        <div class="row no-gutters align-items-center smallcardSize">
          <div class="col mr-2">
            <div class="text-xs font-weight-bold text-gray-800 text-uppercase mb-1">
            <a href="" class="myCardLink cardlink-active">ملفّات الشّركة</a> <i class="text-danger fas fa-upload"></i> </div>
            <!-- <div class="row no-gutters align-items-center">
            
              
            </div> -->
           
          </div>
        
        </div>
      </div>
    </div>
  </div>


      <!-- Earnings (Monthly) Card Example -->
      <div class="col-xl-2 col-md-6 mb-4 " >
    <div class="card border-left-danger shadow h-100">
      <div class="card-body">
        <div class="row no-gutters align-items-center smallcardSize">
          <div class="col mr-2">
            <div class="text-xs font-weight-bold text-gray-800 text-uppercase mb-1">
            <a href="/client/companies/{{$company->id}}/employees" class="myCardLink">موظفين الشركة</a> <i class="text-danger fas fa-user-tie"></i> </div>
            <!-- <div class="row no-gutters align-items-center">
              
            </div> -->
           
          </div>
        
        </div>
      </div>
    </div>
  </div>
</div>


<br><br>

<h1 class="text-gray-800"> ملفّات شركة {{$company->c_name}}
<span><a href="/client/companies/{{$company->id}}/files/upload"><i class="fas fa-edit text-gray-800"></i></span>
<span>  <a href="/client/companies/{{$company->id}}/files/delete" 
            data-toggle="modal" data-target="#deleteModal" id="{{uniqid()}}" onclick="getDeleteModal(this.id,'هل تريد الغاء جميع ملفات شركة {{$company->c_name}}؟')" >
           <i class="fas fa-trash-alt text-danger"></i>
        </a>
</span>
</h1>




<!-- MOF ADDRESS ============ Content Row -->
<br><br>

<h1 class="h3 mb-0 text-danger">مستندات السّجلّ التّجاري</h1>
<br><br>




<div class="row">

 



    <div class="col-lg-3 mb-4">
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-danger">
                طلب تسجيل الشّركة
              </h6>
            </div>
            <div class="card-body">
            <!-- tasjil_sherke -->
            @foreach ($files as $file) 

            
            
                  @if ($file!=null && $file->filetitle=='tasjil_sherke' && $file->category=='sijil_tijare_files')
                    <div style="display:flex;margin-left:5px;">
                    <a href="/client/companies/{{$company->id}}/files/{{$file->id}}/download" class="btn btn-danger btn-user btn-block" type="submit"><i class="fas fa-download"></i> {{basename($file->filepath)}}</a>
                    &nbsp;&nbsp;
                    <a href="/client/companies/{{$company->id}}/files/{{$file->id}}/delete" 
                    data-toggle="modal" data-target="#deleteModal" id="{{uniqid()}}" onclick="getDeleteModal(this.id,'هل تريد الغاء {{basename($file->filepath)}}؟')"> 
                    
                    <i class="fas fa-times text-danger" style="font-size:20px; "></i>
                    </a>
                    </div>

                 
                    <br>
                  @endif
            @endforeach
                
              
            
        
                     
            </div>
          </div>

    </div>

  <div class="col-lg-3 mb-4">
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-danger">النظام الأساسي</h6>
            </div>
            <div class="card-body">
            @foreach ($files as $file) 

            
            
          @if ($file!=null && $file->filetitle=='nizam_asese' && $file->category=='sijil_tijare_files')
            <div style="display:flex;margin-left:5px;">
            <a href="/client/companies/{{$company->id}}/files/{{$file->id}}/download" class="btn btn-danger btn-user btn-block" type="submit"><i class="fas fa-download"></i> {{basename($file->filepath)}}</a>
            &nbsp;&nbsp;
            <a href="/client/companies/{{$company->id}}/files/{{$file->id}}/delete" 
            data-toggle="modal" data-target="#deleteModal" id="{{uniqid()}}" onclick="getDeleteModal(this.id,'هل تريد الغاء {{basename($file->filepath)}}؟')"> 
            
            <i class="fas fa-times text-danger" style="font-size:20px; "></i>
            </a>
            </div>


            <br>
          @endif
          @endforeach
                  
            </div>
          </div>

  </div>

  <div class="col-lg-3 mb-4">
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-danger">إذاعة تجارية</h6>
            </div>
            <div class="card-body">
            @foreach ($files as $file) 

            
            
@if ($file!=null && $file->filetitle=='ize3a_tijareyye' && $file->category=='sijil_tijare_files')
  <div style="display:flex;margin-left:5px;">
  <a href="/client/companies/{{$company->id}}/files/{{$file->id}}/download" class="btn btn-danger btn-user btn-block" type="submit"><i class="fas fa-download"></i> {{basename($file->filepath)}}</a>
  &nbsp;&nbsp;
  <a href="/client/companies/{{$company->id}}/files/{{$file->id}}/delete" 
  data-toggle="modal" data-target="#deleteModal" id="{{uniqid()}}" onclick="getDeleteModal(this.id,'هل تريد الغاء {{basename($file->filepath)}}؟')"> 
  
  <i class="fas fa-times text-danger" style="font-size:20px; "></i>
  </a>
  </div>


  <br>
@endif
@endforeach
            </div>
          </div>

  </div>

  <div class="col-lg-3 mb-4">
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-danger">شهادة تسجيل</h6>
            </div>
            <div class="card-body">
            @foreach ($files as $file) 
            @if ($file!=null && $file->filetitle=='shhedit_tasjil_st' && $file->category=='sijil_tijare_files')
            <div style="display:flex;margin-left:5px;">
            <a href="/client/companies/{{$company->id}}/files/{{$file->id}}/download" class="btn btn-danger btn-user btn-block" type="submit"><i class="fas fa-download"></i> {{basename($file->filepath)}}</a>
            &nbsp;&nbsp;
            <a href="/client/companies/{{$company->id}}/files/{{$file->id}}/delete" 
            data-toggle="modal" data-target="#deleteModal" id="{{uniqid()}}" onclick="getDeleteModal(this.id,'هل تريد الغاء {{basename($file->filepath)}}؟')"> 
            
            <i class="fas fa-times text-danger" style="font-size:20px; "></i>
            </a>
            </div>


            <br>
          @endif
          @endforeach
            </div>
          </div>

  </div>



</div>

<div class="row">


<div class="col-lg-3 mb-4">
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-danger">محضر جمعيّة عموميّة</h6>
            </div>
            <div class="card-body">
            @foreach ($files as $file) 
            @if ($file!=null && $file->filetitle=='mahdar_jam3eyye' && $file->category=='sijil_tijare_files')
            <div style="display:flex;margin-left:5px;">
            <a href="/client/companies/{{$company->id}}/files/{{$file->id}}/download" class="btn btn-danger btn-user btn-block" type="submit"><i class="fas fa-download"></i> {{basename($file->filepath)}}</a>
            &nbsp;&nbsp;
            <a href="/client/companies/{{$company->id}}/files/{{$file->id}}/delete" 
            data-toggle="modal" data-target="#deleteModal" id="{{uniqid()}}" onclick="getDeleteModal(this.id,'هل تريد الغاء {{basename($file->filepath)}}؟')"> 
            
            <i class="fas fa-times text-danger" style="font-size:20px; "></i>
            </a>
            </div>


            <br>
          @endif
          @endforeach
            </div>
          </div>

  </div>

  <div class="col-lg-3 mb-4">
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-danger">إتفاقية محامي الشّركة</h6>
            </div>
            <div class="card-body">
            @foreach ($files as $file) 
            @if ($file!=null && $file->filetitle=='itifa2yet_mohame' && $file->category=='sijil_tijare_files')
            <div style="display:flex;margin-left:5px;">
            <a href="/client/companies/{{$company->id}}/files/{{$file->id}}/download" class="btn btn-danger btn-user btn-block" type="submit"><i class="fas fa-download"></i> {{basename($file->filepath)}}</a>
            &nbsp;&nbsp;
            <a href="/client/companies/{{$company->id}}/files/{{$file->id}}/delete" 
            data-toggle="modal" data-target="#deleteModal" id="{{uniqid()}}" onclick="getDeleteModal(this.id,'هل تريد الغاء {{basename($file->filepath)}}؟')"> 
            
            <i class="fas fa-times text-danger" style="font-size:20px; "></i>
            </a>
            </div>


            <br>
          @endif
          @endforeach
            </div>
          </div>

  </div>


  <div class="col-lg-3 mb-4">
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-danger">إفادة وقوعات</h6>
            </div>
            <div class="card-body">
            @foreach ($files as $file) 
            @if ($file!=null && $file->filetitle=='ifedit_woko3at' && $file->category=='sijil_tijare_files')
            <div style="display:flex;margin-left:5px;">
            <a href="/client/companies/{{$company->id}}/files/{{$file->id}}/download" class="btn btn-danger btn-user btn-block" type="submit"><i class="fas fa-download"></i> {{basename($file->filepath)}}</a>
            &nbsp;&nbsp;
            <a href="/client/companies/{{$company->id}}/files/{{$file->id}}/delete" 
            data-toggle="modal" data-target="#deleteModal" id="{{uniqid()}}" onclick="getDeleteModal(this.id,'هل تريد الغاء {{basename($file->filepath)}}؟')"> 
            
            <i class="fas fa-times text-danger" style="font-size:20px; "></i>
            </a>
            </div>


            <br>
          @endif
          @endforeach
            </div>
          </div>

  </div>

  <div class="col-lg-3 mb-4">
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-danger">مستندات أخرى</h6>
            </div>
            <div class="card-body">
            @foreach ($files as $file) 
            @if ($file!=null && $file->filetitle=='st_others' && $file->category=='sijil_tijare_files')
            <div style="display:flex;margin-left:5px;">
            <a href="/client/companies/{{$company->id}}/files/{{$file->id}}/download" class="btn btn-danger btn-user btn-block" type="submit"><i class="fas fa-download"></i> {{basename($file->filepath)}}</a>
            &nbsp;&nbsp;
            <a href="/client/companies/{{$company->id}}/files/{{$file->id}}/delete" 
            data-toggle="modal" data-target="#deleteModal" id="{{uniqid()}}" onclick="getDeleteModal(this.id,'هل تريد الغاء {{basename($file->filepath)}}؟')"> 
            
            <i class="fas fa-times text-danger" style="font-size:20px; "></i>
            </a>
            </div>


            <br>
          @endif
          @endforeach
            </div>
          </div>

  </div>
</div>


<div>
  <br><br>
  <hr>
  <br><br><br><br>
</div>


<h1 class="h3 mb-0 text-danger" >مستندات وزارة الماليّة </h1>
<br><br>

<div class="row">



    <div class="col-lg-3 mb-4">
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-danger">
                شهادة تسجيل الماليّة
              </h6>
            </div>
            <div class="card-body">
            @foreach ($files as $file) 
            @if ($file!=null && $file->filetitle=='tasjil_meliyye' && $file->category=='mof_files')
            <div style="display:flex;margin-left:5px;">
            <a href="/client/companies/{{$company->id}}/files/{{$file->id}}/download" class="btn btn-danger btn-user btn-block" type="submit"><i class="fas fa-download"></i> {{basename($file->filepath)}}</a>
            &nbsp;&nbsp;
            <a href="/client/companies/{{$company->id}}/files/{{$file->id}}/delete" 
            data-toggle="modal" data-target="#deleteModal" id="{{uniqid()}}" onclick="getDeleteModal(this.id,'هل تريد الغاء {{basename($file->filepath)}}؟')"> 
            
            <i class="fas fa-times text-danger" style="font-size:20px; "></i>
            </a>
            </div>


            <br>
          @endif
          @endforeach
                     
            </div>
          </div>

    </div>

  <div class="col-lg-3 mb-4">
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-danger">شهادة تسجيل VAT</h6>
            </div>
            <div class="card-body">
            @foreach ($files as $file) 
            @if ($file!=null && $file->filetitle=='tasjil_vat' && $file->category=='mof_files')
            <div style="display:flex;margin-left:5px;">
            <a href="/client/companies/{{$company->id}}/files/{{$file->id}}/download" class="btn btn-danger btn-user btn-block" type="submit"><i class="fas fa-download"></i> {{basename($file->filepath)}}</a>
            &nbsp;&nbsp;
            <a href="/client/companies/{{$company->id}}/files/{{$file->id}}/delete" 
            data-toggle="modal" data-target="#deleteModal" id="{{uniqid()}}" onclick="getDeleteModal(this.id,'هل تريد الغاء {{basename($file->filepath)}}؟')"> 
            
            <i class="fas fa-times text-danger" style="font-size:20px; "></i>
            </a>
            </div>


            <br>
          @endif
          @endforeach
            </div>
          </div>

  </div>

  <div class="col-lg-3 mb-4">
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-danger">مباشرة عمل</h6>
            </div>
            <div class="card-body">
            @foreach ($files as $file) 
            @if ($file!=null && $file->filetitle=='mobeshrit_3amal' && $file->category=='mof_files')
            <div style="display:flex;margin-left:5px;">
            <a href="/client/companies/{{$company->id}}/files/{{$file->id}}/download" class="btn btn-danger btn-user btn-block" type="submit"><i class="fas fa-download"></i> {{basename($file->filepath)}}</a>
            &nbsp;&nbsp;
            <a href="/client/companies/{{$company->id}}/files/{{$file->id}}/delete" 
            data-toggle="modal" data-target="#deleteModal" id="{{uniqid()}}" onclick="getDeleteModal(this.id,'هل تريد الغاء {{basename($file->filepath)}}؟')"> 
            
            <i class="fas fa-times text-danger" style="font-size:20px; "></i>
            </a>
            </div>


            <br>
          @endif
          @endforeach
            </div>
          </div>

  </div>

  <div class="col-lg-3 mb-4">
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-danger">مستندات أخرى</h6>
            </div>
            <div class="card-body">
            @foreach ($files as $file) 
            @if ($file!=null && $file->filetitle=='mof_others' && $file->category=='mof_files')
            <div style="display:flex;margin-left:5px;">
            <a href="/client/companies/{{$company->id}}/files/{{$file->id}}/download" class="btn btn-danger btn-user btn-block" type="submit"><i class="fas fa-download"></i> {{basename($file->filepath)}}</a>
            &nbsp;&nbsp;
            <a href="/client/companies/{{$company->id}}/files/{{$file->id}}/delete" 
            data-toggle="modal" data-target="#deleteModal" id="{{uniqid()}}" onclick="getDeleteModal(this.id,'هل تريد الغاء {{basename($file->filepath)}}؟')"> 
            
            <i class="fas fa-times text-danger" style="font-size:20px; "></i>
            </a>
            </div>


            <br>
          @endif
          @endforeach
            </div>
          </div>

  </div>


</div>


<div>
  <br><br>
  <hr>
  <br><br><br><br>
</div>


<h1 class="h3 mb-0 text-danger">مستندات الصندوق الوطني للضمان الاجتماعي </h1>

<br><br>

<div class="row">



    <div class="col-lg-3 mb-4">
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-danger">
                شهادة تسجيل
              </h6>
            </div>
            <div class="card-body">
            @foreach ($files as $file) 
            @if ($file!=null && $file->filetitle=='tasjil_ssn' && $file->category=='ssn_files')
            <div style="display:flex;margin-left:5px;">
            <a href="/client/companies/{{$company->id}}/files/{{$file->id}}/download" class="btn btn-danger btn-user btn-block" type="submit"><i class="fas fa-download"></i> {{basename($file->filepath)}}</a>
            &nbsp;&nbsp;
            <a href="/client/companies/{{$company->id}}/files/{{$file->id}}/delete" 
            data-toggle="modal" data-target="#deleteModal" id="{{uniqid()}}" onclick="getDeleteModal(this.id,'هل تريد الغاء {{basename($file->filepath)}}؟')"> 
            
            <i class="fas fa-times text-danger" style="font-size:20px; "></i>
            </a>
            </div>


            <br>
          @endif
          @endforeach
                     
            </div>
          </div>

    </div>

  <div class="col-lg-3 mb-4">
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-danger">مستندات أخرى</h6>
            </div>
            <div class="card-body">
            @foreach ($files as $file) 
            @if ($file!=null && $file->filetitle=='ssn_others' && $file->category=='ssn_files')
            <div style="display:flex;margin-left:5px;">
            <a href="/client/companies/{{$company->id}}/files/{{$file->id}}/download" class="btn btn-danger btn-user btn-block" type="submit"><i class="fas fa-download"></i> {{basename($file->filepath)}}</a>
            &nbsp;&nbsp;
            <a href="/client/companies/{{$company->id}}/files/{{$file->id}}/delete" 
            data-toggle="modal" data-target="#deleteModal" id="{{uniqid()}}" onclick="getDeleteModal(this.id,'هل تريد الغاء {{basename($file->filepath)}}؟')"> 
            
            <i class="fas fa-times text-danger" style="font-size:20px; "></i>
            </a>
            </div>


            <br>
          @endif
          @endforeach
            </div>
          </div>

  </div>




</div>



<div>
  <br><br>
  <hr>
  <br><br><br><br>
</div>


<h1 class="h3 mb-0 text-danger">مستندات أخرى</h1>

<br><br>

<div class="row">



    <div class="col-lg-3 mb-4">
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-danger">
                مستندات أخرى
              </h6>
            </div>
            <div class="card-body">
            @foreach ($files as $file) 
            @if ($file!=null && $file->filetitle=='f_others' && $file->category=='others_files')
            <div style="display:flex;margin-left:5px;">
            <a href="/client/companies/{{$company->id}}/files/{{$file->id}}/download" class="btn btn-danger btn-user btn-block" type="submit"><i class="fas fa-download"></i> {{basename($file->filepath)}}</a>
            &nbsp;&nbsp;
            <a href="/client/companies/{{$company->id}}/files/{{$file->id}}/delete" 
            data-toggle="modal" data-target="#deleteModal" id="{{uniqid()}}" onclick="getDeleteModal(this.id,'هل تريد الغاء {{basename($file->filepath)}}؟')"> 
            
            <i class="fas fa-times text-danger" style="font-size:20px; "></i>
            </a>
            </div>


            <br>
          @endif
          @endforeach
                     
            </div>
          </div>

    </div>






</div>




@endsection