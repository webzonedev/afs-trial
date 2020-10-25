@extends ('client/layout')

@section ('client_home_content')

<!-- Begin Page Content -->
<div class="container-fluid">

<br>
<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
  <h1 class="h3 mb-0 text-danger">لوحة التحكّم</h1>
</div>
<br>
<!-- Content Row -->
<div class="row">


  <!-- Earnings (Monthly) Card Example -->
  
  <div class="col-xl-4 col-md-6 mb-4">
    <div class="card border-left-gray shadow h-100">
      <div class="card-body">
        <div class="row no-gutters align-items-center">
          <div class="col mr-2">
            
          <div class="text-xs font-weight-bold text-gray-800 text-uppercase mb-1">
            <a href="/client/companies" class="myCardLink">
            الشركات
            </a>
          </div>
            
          </div>
          <div class="col-auto">
            <div class="fas fa-building mb-0 text-danger my-text-2"></div>
          <div class="h5 mb-0 font-weight-bold text-danger my-text-1">14</div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Earnings (Monthly) Card Example -->
  <div class="col-xl-4 col-md-6 mb-4 " >
    <div class="card border-left-gray shadow h-100">
      <div class="card-body">
        <div class="row no-gutters align-items-center">
          <div class="col mr-2">
            <div class="text-xs font-weight-bold text-gray-800 text-uppercase mb-1">
            <a href="/client/employees" class="myCardLink">
              الموظّفين
            </a>
            </div>
            <!-- <div class="row no-gutters align-items-center">
            
              
            </div> -->
           
          </div>
          <div class="col-auto">
          <div class="fas fa-users mb-0 text-danger my-text-2"></div>
          <div class="h5 mb-0 font-weight-bold text-danger my-text-1">135</div>

          </div>
        </div>
      </div>
    </div>
  </div>


</div>


<!-- Content Row -->
<div class="row">

  <div class="col-lg-6 mb-4">

    <!-- Illustrations -->
    <div class="card shadow mb-4">
      <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-danger">عنوان</h6>
      </div>
      <div class="card-body">
        <div class="text-center">
          <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 25rem;" src="" alt="">
        </div>
        <p></p>
      </div>
    </div>

        <!-- Illustrations -->
        <div class="card shadow mb-4">
      <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-danger">عنوان</h6>
      </div>
      <div class="card-body">
        <div class="text-center">
          <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 25rem;" src="" alt="">
        </div>
        <p></p>
      </div>
    </div>


  </div>

  <div class="col-lg-6 mb-4">

<!-- Illustrations -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-danger">عنوان</h6>
  </div>
  <div class="card-body">
    <div class="text-center">
      <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 25rem;" src="" alt="">
    </div>
    <p></p>
  </div>
</div>

    <!-- Illustrations -->
    <div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-danger">عنوان</h6>
  </div>
  <div class="card-body">
    <div class="text-center">
      <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 25rem;" src="" alt="">
    </div>
    <p></p>
  </div>
</div>


</div>


</div>


<div class="row">
<a href="client/companies/create" class=" d-sm-inline-block btn btn-sm btn-danger shadow-sm " style="margin:10px;">إنشاء شركة &nbsp;&nbsp;<i class="fas fa-plus fa-sm text-white-50"></i> </a>
</div>


</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->



@endsection