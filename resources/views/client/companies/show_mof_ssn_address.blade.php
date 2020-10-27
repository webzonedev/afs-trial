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
  <div class="col-xl-5 col-md-6 mb-4">
    <div class="card border-left-danger shadow h-100">
      <div class="card-body">
        <div class="row no-gutters align-items-center">
          <div class="col mr-2">
            <div class="text-xs font-weight-bold text-gray-800 text-uppercase mb-1">
            <a href="" class="myCardLink cardlink-active"> العنوان لدى وزارة المالية و الضمان الاجتماعي</a> <i class="text-danger fas fa-address-card"></i> </div>
            
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
            <a href="" class="myCardLink">ملفّات الشّركة</a> <i class="text-danger fas fa-upload"></i> </div>
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
            <a href="" class="myCardLink">موظفين الشركة</a> <i class="text-danger fas fa-user-tie"></i> </div>
            <!-- <div class="row no-gutters align-items-center">
              
            </div> -->
           
          </div>
        
        </div>
      </div>
    </div>
  </div>
</div>









<!-- MOF ADDRESS ============ Content Row -->
<br>
<h1 class="h3 mb-0 text-danger">عنوان الشركة لدى وزارة المالية     - <span class="text-gray-800">شركة</span> {{$company->c_name}}
<span><a href="/client/companies/{{$company->id}}/mof_ssn_address/edit"><i class="fas fa-edit text-gray-800"></i></a></span>
</h1>
<br><br>

<div class="row">



  <div class="col-lg-2 mb-4">
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-danger">المحافظة</h6>
            </div>
            <div class="card-body">
                @if ($mof_address!=null)
                {{$mof_address->governorate}}
                @endif
            </div>
          </div>

  </div>

  <div class="col-lg-2 mb-4">
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-danger">القضاء</h6>
            </div>
            <div class="card-body">
            @if ($mof_address!=null)
              {{$mof_address->district}}
            @endif
            </div>
          </div>

  </div>

  <div class="col-lg-2 mb-4">
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-danger">الشارع</h6>
            </div>
            <div class="card-body">
            @if ($mof_address!=null)
            {{$mof_address->street}}
            @endif
            </div>
          </div>

  </div>

  <div class="col-lg-2 mb-4">
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-danger">الحيّ</h6>
            </div>
            <div class="card-body">
            @if ($mof_address!=null)
            {{$mof_address->neighborhood}}
            @endif
            </div>
          </div>

  </div>

  <div class="col-lg-2 mb-4">
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-danger">المنطقة العقاريّّة</h6>
            </div>
            <div class="card-body">
            @if ($mof_address!=null)
            {{$mof_address->real_estate_area}}
            @endif
            </div>
          </div>

  </div>

  <div class="col-lg-2 mb-4">
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-danger">رقم العقار</h6>
            </div>
            <div class="card-body">
            @if ($mof_address!=null)
            {{$mof_address->real_estate_number}}
            @endif
            </div>
          </div>

  </div>

</div>

<div class="row">





  <div class="col-lg-2 mb-4">
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-danger">رقم القسم</h6>
            </div>
            <div class="card-body">
            @if ($mof_address!=null)
            {{$mof_address->division_number}}
            @endif
            </div>
          </div>

  </div>

  <div class="col-lg-2 mb-4">
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-danger">المبنى</h6>
            </div>
            <div class="card-body">
            @if ($mof_address!=null)
            {{$mof_address->building}}
            @endif
            </div>
          </div>

  </div>

  <div class="col-lg-2 mb-4">
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-danger">الطابق</h6>
            </div>
            <div class="card-body">
            @if ($mof_address!=null)
            {{$mof_address->floor}}
            @endif
            </div>
          </div>

  </div>

  <div class="col-lg-2 mb-4">
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-danger">هاتف</h6>
            </div>
            <div class="card-body">
            @if ($mof_address!=null)
            {{$mof_address->phone}}
            @endif
            </div>
          </div>

  </div>

  <div class="col-lg-2 mb-4">
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-danger">فاكس</h6>
            </div>
            <div class="card-body">
            @if ($mof_address!=null)
            {{$mof_address->fax}}
            @endif
            </div>
          </div>

  </div>

  <div class="col-lg-2 mb-4">
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-danger">صندوق بريد</h6>
            </div>
            <div class="card-body">
            @if ($mof_address!=null)
            {{$mof_address->mailbox}}
            @endif
            </div>
          </div>

  </div>

</div>



<div class="row">


  <div class="col-lg-2 mb-4">
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-danger">المنطقة</h6>
            </div>
            <div class="card-body">
            @if ($mof_address!=null)
            {{$mof_address->region}}
            @endif
            </div>
          </div>

  </div>

  <div class="col-lg-2 mb-4">
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-danger">تاريخ تغيير العنوان</h6>
            </div>
            <div class="card-body">
            @if ($mof_address!=null)
            {{$mof_address->changed_date}}
            @endif
            </div>
          </div>

  </div>


</div>



<div>
  <br><br>
  <hr>
  <br><br><br><br>
</div>


<!-- SSN ADDRES ================ Content Row -->
<br>
<h1 class="h3 mb-0 text-danger">عنوان الشركة لدى الصندوق الوطني للضمان الاجتماعي  - <span class="text-gray-800">شركة</span> {{$company->c_name}}
<span><a href="/client/companies/{{$company->id}}/mof_ssn_address/edit"><i class="fas fa-edit text-gray-800"></i></a></span>
</h1>
<br><br>

<div class="row">



  <div class="col-lg-2 mb-4">
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-danger">المحافظة</h6>
            </div>
            <div class="card-body">
            @if ($ssn_address!=null)
            {{$ssn_address->governorate}}
            @endif
              
            </div>
          </div>

  </div>

  <div class="col-lg-2 mb-4">
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-danger">القضاء</h6>
            </div>
            <div class="card-body">
            @if ($ssn_address!=null)
            {{$ssn_address->district}}
            @endif
            </div>
          </div>

  </div>

  <div class="col-lg-2 mb-4">
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-danger">الشارع</h6>
            </div>
            <div class="card-body">
            @if ($ssn_address!=null)
            {{$ssn_address->street}}
            @endif
            </div>
          </div>

  </div>

  <div class="col-lg-2 mb-4">
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-danger">الحيّ</h6>
            </div>
            <div class="card-body">
            @if ($ssn_address!=null)
            {{$ssn_address->neighborhood}}
            @endif
            </div>
          </div>

  </div>

  <div class="col-lg-2 mb-4">
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-danger">المنطقة العقاريّّة</h6>
            </div>
            <div class="card-body">
            @if ($ssn_address!=null)
            {{$ssn_address->real_estate_area}}
            @endif
            </div>
          </div>

  </div>

  <div class="col-lg-2 mb-4">
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-danger">رقم العقار</h6>
            </div>
            <div class="card-body">
            @if ($ssn_address!=null)
            {{$ssn_address->real_estate_number}}
            @endif
            </div>
          </div>

  </div>

</div>

<div class="row">





  <div class="col-lg-2 mb-4">
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-danger">رقم القسم</h6>
            </div>
            <div class="card-body">
            @if ($ssn_address!=null)
            {{$ssn_address->division_number}}
            @endif
            </div>
          </div>

  </div>

  <div class="col-lg-2 mb-4">
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-danger">المبنى</h6>
            </div>
            <div class="card-body">
            @if ($ssn_address!=null)
            {{$ssn_address->building}}
            @endif
            </div>
          </div>

  </div>

  <div class="col-lg-2 mb-4">
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-danger">الطابق</h6>
            </div>
            <div class="card-body">
            @if ($ssn_address!=null)
            {{$ssn_address->floor}}
            @endif
            </div>
          </div>

  </div>

  <div class="col-lg-2 mb-4">
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-danger">هاتف</h6>
            </div>
            <div class="card-body">
            @if ($ssn_address!=null)
            {{$ssn_address->phone}}
            @endif
            </div>
          </div>

  </div>

  <div class="col-lg-2 mb-4">
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-danger">فاكس</h6>
            </div>
            <div class="card-body">
            @if ($ssn_address!=null)
            {{$ssn_address->fax}}
            @endif
            </div>
          </div>

  </div>

  <div class="col-lg-2 mb-4">
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-danger">صندوق بريد</h6>
            </div>
            <div class="card-body">
            @if ($ssn_address!=null)
            {{$ssn_address->mailbox}}
            @endif
            </div>
          </div>

  </div>



</div>




<div class="row">







  <div class="col-lg-2 mb-4">
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-danger">المنطقة</h6>
            </div>
            <div class="card-body">
            @if ($ssn_address!=null)
            {{$ssn_address->region}}
            @endif
            </div>
          </div>

  </div>

  <div class="col-lg-2 mb-4">
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-danger">تاريخ تغيير العنوان</h6>
            </div>
            <div class="card-body">
            @if ($ssn_address!=null)
            {{$ssn_address->changed_date}}
            @endif
            </div>
          </div>

  </div>


</div>








@endsection