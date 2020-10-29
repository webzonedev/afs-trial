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
            <a href="" class="myCardLink cardlink-active">محامي الشّركة</a> <i class="text-danger fas fa-gavel"></i> </div>
           
           
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
            <a href="/client/companies/{{$company->id}}/files" class="myCardLink">ملفّات الشّركة</a> <i class="text-danger fas fa-upload"></i> </div>
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
         
           
          </div>
        
        </div>
      </div>
    </div>
  </div>
</div>





<!-- Content Row -->
<br>
<h1 class="h3 mb-0 text-gray-800">معلومات محامي شركة <span class="text-danger">{{$company->c_name}}</span>
<span><a href="/client/companies/{{$company->id}}/lawyer/edit"><i class="fas fa-edit text-gray-800"></i></a></span>
</h1>

<br><br>


<div class="row">

  <div class="col-lg-3 mb-4">
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-danger">اسم المحامي</h6>
            </div>
            <div class="card-body">
             
                     {{$lawyer != null ? $lawyer->lawyer_name : ''}}
                    
                     

            </div>
          </div>

  </div>

  <div class="col-lg-3 mb-4">
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-danger">البريد الالكتروني</h6>
            </div>
            <div class="card-body">

            {{$lawyer != null ? $lawyer->lawyer_email : ''}}

                      
            </div>
          </div>

  </div>

  <div class="col-lg-3 mb-4">
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-danger">الهاتف</h6>
            </div>
            <div class="card-body">

                
            {{$lawyer != null ? $lawyer->lawyer_phone: ''}}

            </div>
          </div>

  </div>

 



  <div class="col-lg-3 mb-4">
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-danger">الهاتف المحمول</h6>
            </div>
            <div class="card-body">

                
            {{$lawyer != null ? $lawyer->lawyer_mobile : ''}}

            </div>
          </div>

  </div>

</div>






<div class="row">

  <div class="col-lg-3 mb-4">
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-danger">الفاكس</h6>
            </div>
            <div class="card-body">
             
            {{$lawyer != null ? $lawyer->lawyer_fax : ''}}
                    
                     

            </div>
          </div>

  </div>

  <div class="col-lg-3 mb-4">
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-danger">العنوان</h6>
            </div>
            <div class="card-body">
             
            {{$lawyer != null ? $lawyer->lawyer_address : ''}}
                    
                     

            </div>
          </div>

  </div>

  <div class="col-lg-3 mb-4">
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-danger">اسم مكتب المحاماة</h6>
            </div>
            <div class="card-body">
             
            {{$lawyer != null ? $lawyer->law_office_name: ''}}
                     

            </div>
          </div>

  </div>

 



  <div class="col-lg-3 mb-4">
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-danger">  الرقم المالي</h6>
            </div>
            <div class="card-body">
             
            {{$lawyer != null ? $lawyer->lawyer_mof_number : ''}}
                    
                     

            </div>
          </div>

  </div>



</div>










@endsection