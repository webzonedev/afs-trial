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
            <a href="client/companies/{{$company->id}}/employees/{{$employee->id}}/spouse" class="myCardLink ">معلومات عن الزوج(ة)</a> <i class="text-danger fas fa-male"></i>  <i class="text-danger fas fa-female"></i> </div>
            
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
            <a href="client/companies/{{$company->id}}/employees/{{$employee->id}}/child" class="myCardLink cardlink-active">معلومات عن الأولاد</a> <i class="text-danger fas fa-child"></i> </div>
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
            <a href="" class="myCardLink">معلومات عن العمل السابق</a> <i class="text-danger fas fa-building"></i> </div>
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






<form method="POST" action="/client/companies/{{$company->id}}/employees/{{$employee->id}}/child/">
          @csrf





 
          <div class="row">

<div class="col-lg-2 mb-4">
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
          <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-danger">اسم الولد</h6>
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
            <h6 class="m-0 font-weight-bold text-danger">الشهرة</h6>
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
            <h6 class="m-0 font-weight-bold text-danger">الجنس</h6>
          </div>
          <div class="card-body">
          <select class="form-control form-control-user" id="sex" name="sex">
            
            <option value="ذكر" >
               ذكر
            </option>

            <option value="أنثى" >
            أنثى
            </option>
          </select>
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
          <h6 class="m-0 font-weight-bold text-danger"> الوضع العائلي</h6>
        </div>
        <div class="card-body">
        <select class="form-control form-control-user" id="marital_status" name="marital_status">
            
            <option value="متزوّج" >
            متزوّج
            </option>

            <option value="أعذب" >
            أعذب
            </option>

            <option value="أرمل" >
            أرمل
            </option>

            <option value="مطلّق" >
            مطلّق
            </option>
          </select>
        </div>
      </div>

</div>

<div class="col-lg-2 mb-4">
      <!-- DataTales Example -->
      <div class="card shadow mb-4">
        <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-danger">عجز دائم</h6>
        </div>
        <div class="card-body">
        <select class="form-control form-control-user" id="disability" name="disability">
            
            <option value="كلّا" >
            كلّا
            </option>

            <option value="نعم" >
            نعم
            </option>
        </select>
        </div>
      </div>

</div>

<div class="col-lg-2 mb-4">
      <!-- DataTales Example -->
      <div class="card shadow mb-4">
        <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-danger">طالب</h6>
        </div>
        <div class="card-body">
        <select class="form-control form-control-user" id="student" name="student" onchange="checkIfStudent(this.id)">
    
        <option value="نعم" >
            نعم
            </option>

            <option value="كلّا" >
            كلّا
            </option>

            
        </select>
        </div>
      </div>

</div>

<div class="col-lg-2 mb-4 isstudent">
      <!-- DataTales Example -->
      <div class="card shadow mb-4">
        <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-danger"> اسم المؤسّسة التعليميّة </h6>
        </div>
        <div class="card-body">
        <input type="text" class="form-control form-control-user" id="edu_name" name="edu_name" 
                      value=" " >
        </div>
      </div>

</div>







</div>


<div class="row">


<div class="col-lg-2 mb-4 isstudent">
      <!-- DataTales Example -->
      <div class="card shadow mb-4">
        <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-danger">المستوى</h6>
        </div>
        <div class="card-body">
        <input type="text" class="form-control form-control-user" id="level" name="level" 
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