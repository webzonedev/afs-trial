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
            <a href="client/companies/{{$company->id}}/employees/{{$employee->id}}/address" class="myCardLink">عنوان الموظّف</a> <i class="text-danger fas fa-map-marker-alt"></i> </div>
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
            <a href="/client/companies/1/employees/1/child/" class="myCardLink ">معلومات عن الزوج(ة)</a> <i class="text-danger fas fa-male "></i><i class="text-danger fas fa-female "></i> </div>
            
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
            <a href="" class="myCardLink cardlink-active">معلومات عن الأولاد</a> <i class="text-danger fas fa-child"></i> </div>
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
<h1 class="h3 mb-0 text-danger"> ولد الموظّف  <span class="text-gray-800">{{$employee->user->firstname}} {{$employee->user->lastname}}</span>
<span><a href="/client/companies/{{$company->id}}/employees/{{$employee->id}}/child/{{$child->id}}/edit"><i class="fas fa-edit text-gray-800"></i></a></span>
</h1>
<br><br>












 
          <div class="row">

<div class="col-lg-2 mb-4">
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
          <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-danger">اسم الولد</h6>
          </div>
          <div class="card-body">
          <p>{{$child->firstname}}</p>
          </div>
        </div>

</div>

<div class="col-lg-2 mb-4">
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
          <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-danger">شهرة </h6>
          </div>
          <div class="card-body">
          <p>{{$child->lastname}}</p>
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
          <p>{{$child->father}}</p>
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
          <p>{{$child->mother}}</p>
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
          <p>{{$child->sex}}</p>
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
          <p>{{$child->birthdate}}</p>
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
          <p>{{$child->birthplace}}</p>
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
        <p>{{$child->deathdate}}</p>
        </div>
      </div>

</div>


<div class="col-lg-2 mb-4">
      <!-- DataTales Example -->
      <div class="card shadow mb-4">
        <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-danger">الوضع العائلي</h6>
        </div>
        <div class="card-body">
        <p>{{$child->marital_status}}</p>
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
        <p>{{$child->disability}}</p>
        </div>
      </div>

</div>

<div class="col-lg-2 mb-4">
      <!-- DataTales Example -->
      <div class="card shadow mb-4">
        <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-danger"> طالب</h6>
        </div>
        <div class="card-body">
        <p>{{$child->student}}</p>
        </div>
      </div>

</div>

<div class="col-lg-2 mb-4" @if ($child->student == 'كلّا') style="display:none" @endif>
      <!-- DataTales Example -->
      <div class="card shadow mb-4">
        <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-danger">اسم المؤسّسة التعليميّة</h6>
        </div>
        <div class="card-body">
        <p>{{$child->edu_name}}</p>
        </div>
      </div>

</div>






</div>


<div class="row">




<div class="col-lg-2 mb-4" @if ($child->student == 'كلّا') style="display:none" @endif>
      <!-- DataTales Example -->
      <div class="card shadow mb-4">
        <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-danger">  المستوى</h6>
        </div>
        <div class="card-body">
        <p>{{$child->level}}</p>
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
        <p>{{$child->benefit_start_date}}</p>
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
        <p>{{$child->benefit_end_date}}</p>
        </div>
      </div>

</div>

</div>





<br><br>

@endsection