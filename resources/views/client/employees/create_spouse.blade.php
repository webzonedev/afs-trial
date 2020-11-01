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
            <a href="/client/companies/{{$company->id}}/employees/{{$employee->id}}/" class="myCardLink ">معلومات الموظّف</a> <i class="text-danger fas fa-info-circle"></i> </div>
          </div>
          
        </div>
      </div>
    </div>
  </div>


  <div class="col-xl-2 col-md-6 mb-4">
    <div class="card border-left-danger shadow h-100">
      <div class="card-body">
        <div class="row no-gutters align-items-center">
          <div class="col mr-2">
            <div class="text-xs font-weight-bold text-gray-800 text-uppercase mb-1">
            <a href="/client/companies/{{$company->id}}/employees/{{$employee->id}}/address" class="myCardLink">عنوان الموظّف</a> <i class="text-danger fas fa-map-marker-alt"></i> </div>
          </div>
          
        </div>
      </div>
    </div>
  </div>

  <!-- Earnings (Monthly) Card Example -->
  <div class="col-xl-2 col-md-6 mb-4">
    <div class="card border-left-danger shadow h-100">
      <div class="card-body">
        <div class="row no-gutters align-items-center">
          <div class="col mr-2">
            <div class="text-xs font-weight-bold text-gray-800 text-uppercase mb-1">
            <a href="/client/companies/{{$company->id}}/employees/{{$employee->id}}/spouse" class="myCardLink cardlink-active">معلومات عن الزوج(ة)</a> <i class="text-danger fas fa-male"></i> <i class="text-danger fas fa-female"></i> </div>
            
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
            <a href="/client/companies/{{$company->id}}/employees/{{$employee->id}}/child" class="myCardLink">معلومات عن الأولاد</a> <i class="text-danger fas fa-address-card"></i> </div>
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
            <a href="" class="myCardLink">تحميل ملفّات الموظّف </a> <i class="text-danger fas fa-download"></i> </div>
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
            <a href="" class="myCardLink">معلومات عن العمل السابق</a> <i class="text-danger fas fa-download"></i> </div>
            <!-- <div class="row no-gutters align-items-center">
            
              
            </div> -->
           
          </div>
        
        </div>
      </div>
    </div>
  </div>




</div>


<!-- Content Row -->




<br>
<h1 class="h3 mb-0 text-danger">اضافة زوج للموظّف  <span class="text-gray-800">{{$employee->user->firstname}} {{$employee->user->lastname}}</span></h1>
<br><br>






<form method="POST" action="/client/companies/{{$company->id}}/employees/{{$employee->id}}/spouse/">
          @csrf





 
          <div class="row">

<div class="col-lg-2 mb-4">
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
          <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-danger">اسم الزوج</h6>
          </div>
          <div class="card-body">
          <input type="text" class="form-control form-control-user" id="firstname" name="firstname" >
          </div>
        </div>

</div>

<div class="col-lg-2 mb-4">
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
          <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-danger">شهرة الزوج قبل الزواج</h6>
          </div>
          <div class="card-body">
          <input type="text" class="form-control form-control-user" id="lastname" name="lastname" >
          </div>
        </div>

</div>

<div class="col-lg-2 mb-4">
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
          <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-danger">اسم الأب</h6>
          </div>
          <div class="card-body">
          <input type="text" class="form-control form-control-user" id="father" name="father" 
                      value="">
          </div>
        </div>

</div>

<div class="col-lg-2 mb-4">
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
          <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-danger">اسم الأم</h6>
          </div>
          <div class="card-body">
          <input type="text" class="form-control form-control-user" id="mother" name="mother" 
                      value=" " >
          </div>
        </div>

</div>

<div class="col-lg-2 mb-4">
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
          <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-danger">الجنسيّة</h6>
          </div>
          <div class="card-body">
          <input type="text" class="form-control form-control-user" id="nationality" name="nationality" 
                      value=" " >
          </div>
        </div>

</div>

<div class="col-lg-2 mb-4">
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
          <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-danger">تاريخ الولادة</h6>
          </div>
          <div class="card-body">
          <input type="date" class="form-control form-control-user" id="birthdate" name="birthdate" 
                      value=" " >
          </div>
        </div>

</div>





</div>

<div class="row">

<div class="col-lg-2 mb-4">
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
          <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-danger">مكان الولادة</h6>
          </div>
          <div class="card-body">
          <input type="text" class="form-control form-control-user" id="birthplace" name="birthplace" 
                      value=" " >
          </div>
        </div>

</div>


<div class="col-lg-2 mb-4">
      <!-- DataTales Example -->
      <div class="card shadow mb-4">
        <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-danger">تاريخ الوفاة</h6>
        </div>
        <div class="card-body">
        <input type="date" class="form-control form-control-user" id="deathdate" name="deathdate" 
                      value=" " >
        </div>
      </div>

</div>

<div class="col-lg-2 mb-4">
      <!-- DataTales Example -->
      <div class="card shadow mb-4">
        <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-danger"> رقم السّجلّ</h6>
        </div>
        <div class="card-body">
        <input type="text" class="form-control form-control-user" id="record_number" name="record_number" 
                      value=" " >
        </div>
      </div>

</div>

<div class="col-lg-2 mb-4">
      <!-- DataTales Example -->
      <div class="card shadow mb-4">
        <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-danger">مكان السّجلّ</h6>
        </div>
        <div class="card-body">
        <input type="text" class="form-control form-control-user" id="record_place" name="record_place" 
                      value=" " >
        </div>
      </div>

</div>

<div class="col-lg-2 mb-4">
      <!-- DataTales Example -->
      <div class="card shadow mb-4">
        <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-danger">الرقم المالي</h6>
        </div>
        <div class="card-body">
        <input type="text" class="form-control form-control-user" id="mof_number" name="mof_number" 
                      value=" " >
        </div>
      </div>

</div>

<div class="col-lg-2 mb-4">
      <!-- DataTales Example -->
      <div class="card shadow mb-4">
        <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-danger"> رقم الضمان </h6>
        </div>
        <div class="card-body">
        <input type="text" class="form-control form-control-user" id="ssn_number" name="ssn_number" 
                      value=" " >
        </div>
      </div>

</div>







</div>


<div class="row">


<div class="col-lg-2 mb-4">
      <!-- DataTales Example -->
      <div class="card shadow mb-4">
        <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-danger">يعمل</h6>
        </div>
        <div class="card-body">
        <input type="text" class="form-control form-control-user" id="isworking" name="isworking" 
                      value=" " >
        </div>
      </div>

</div>

<div class="col-lg-2 mb-4">
      <!-- DataTales Example -->
      <div class="card shadow mb-4">
        <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-danger"> اسم الشّركة</h6>
        </div>
        <div class="card-body">
        <input type="text" class="form-control form-control-user" id="company_name" name="company_name" 
                      value=" " >
        </div>
      </div>

</div>


<div class="col-lg-2 mb-4">
      <!-- DataTales Example -->
      <div class="card shadow mb-4">
        <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-danger">الرقم المالي للشّركة </h6>
        </div>
        <div class="card-body">
        <input type="text" class="form-control form-control-user" id="company_mof_number" name="company_mof_number" 
                      value=" " >
        </div>
      </div>

</div>




<div class="col-lg-2 mb-4">
      <!-- DataTales Example -->
      <div class="card shadow mb-4">
        <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-danger">تاريخ بدء الاستقادة</h6>
        </div>
        <div class="card-body">
        <input type="date" class="form-control form-control-user" id="benefit_start_date" name="benefit_start_date" 
                      value=" " >
        </div>
      </div>

</div>


<div class="col-lg-2 mb-4">
      <!-- DataTales Example -->
      <div class="card shadow mb-4">
        <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-danger">تاريخ انتهاء الاستفادة </h6>
        </div>
        <div class="card-body">
        <input type="date" class="form-control form-control-user" id="benefit_end_date" name="benefit_end_date" 
                      value=" " >
        </div>
      </div>

</div>

</div>





<div class="row">
  <div class="mysubmitbtn">
  <button href="" class="btn btn-danger btn-user btn-block" type="submit">تحفيظ</button>
  </div>
</div>

</form>

<br><br>

@endsection