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
<h1 class="h3 mb-0 text-danger">تعديل معلومات محامي الشركة</h1>
<br><br>

  <form method="POST" action="/client/companies/{{$company->id}}/lawyer">
  @csrf
  @method('PUT')

<div class="row">

  <div class="col-lg-3 mb-4">
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-danger">اسم المحامي</h6>
            </div>
            <div class="card-body">
             
                      <input type="text" class="form-control form-control-user " id="" name="lawyer_name" 
                      value="{{ $lawyer != null ? $lawyer->lawyer_name : '' }}" placeholder="اسم المحامي ...">
                    
                     

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

                      <input type="email" class="form-control form-control-user " id="lawyer_email" name="lawyer_email"  
                      value="{{ $lawyer != null ? $lawyer->lawyer_email : ''}}"  placeholder="البريد الالكتروني ... ">

                      
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

                
            <input type="tel" class="form-control form-control-user " id="lawyer_phone" name="lawyer_phone"  
                      value="{{ $lawyer != null ? $lawyer->lawyer_phone : ''}}"  placeholder="الهاتف  ... ">

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

                
            <input type="tel" class="form-control form-control-user " id="lawyer_mobile" name="lawyer_mobile"  
                      value="{{ $lawyer != null ? $lawyer->lawyer_mobile : '' }}"  placeholder="الهاتف المحمول ... ">

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
             
                      <input type="text" class="form-control form-control-user " id="lawyer_fax" name="lawyer_fax" 
                      value="{{ $lawyer != null ? $lawyer->lawyer_fax : '' }}" placeholder=" الفاكس ...">
                    
                     

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
             
                      <input type="text" class="form-control form-control-user " id="lawyer_address" name="lawyer_address" 
                      value="{{ $lawyer != null ? $lawyer->lawyer_address : ''  }}" placeholder=" الفاكس ...">
                    
                     

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
             
                      <input type="text" class="form-control form-control-user " id="law_office_name" name="law_office_name" 
                      value="{{ $lawyer != null ? $lawyer->law_office_name : ''}}" placeholder=" اسم مكتب المحاماة ...">
                    
                     

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
             
                      <input type="text" class="form-control form-control-user " id="lawyer_mof_number" name="lawyer_mof_number" 
                      value="{{ $lawyer != null ? $lawyer->lawyer_mof_number : ''}}" placeholder="  الرقم المالي ...">
                    
                     

            </div>
          </div>

  </div>



</div>



<div class="row">
  <div class="mysubmitbtn">
  <button href="" class="btn btn-danger btn-user btn-block" type="submit">تعديل</button>
  </div>
</div>

</form>






@endsection