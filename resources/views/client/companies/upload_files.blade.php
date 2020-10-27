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
<h1 class="h3 mb-0 text-danger">مستندات السّجلّ التّجاري - <span class="text-gray-800">شركة</span> </h1>

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


            <form  method="POST" action="{{action('Client\CompanyFilesController@upload_files' , $company->id) }}" enctype="multipart/form-data" id="maform" >
            @csrf
            @method('PUT')


            <div style="display:flex ; margin-bottom:10px" >

            <input type="file" class="form-control form-control-user " id="tasjil_sherke" name="tasjil_sherke[]" 
            accept="image/* , .pdf" multiple>

            <button href="" class="btn btn-danger btn-user" type="submit" id="uploadBtn" ><i class="fas fa-upload"></i></button>
   
          </div>

            <div  class="maProgressBar  progress-bar" role="progressbar" style="width: 0% ; background-color:#d1d3e2; margin-bottom:10px;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">0%</div>

            <div style="margin:auto; text-align:center" >
              <p id="Msg"></p>
            </div>
              


          </div>
          </div>

    </div>

      </form>

  <div class="col-lg-3 mb-4">
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-danger">النظام الأساسي</h6>
            </div>
            <div class="card-body">
            <input type="file" class="form-control form-control-user " id="nizam_asese" name="nizam_asese">
                  
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
            <input type="file" class="form-control form-control-user " id="ize3a_tijareyye" name="ize3a_tijareyye" >
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
            <input type="file" class="form-control form-control-user " id="shhedit_tasjil_sijil" name="shhedet_tasjil_sijil">
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
            <input type="file" class="form-control form-control-user " id="mahdar_jam3yye" name="mahdar_jam3yye">
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
            <input type="file" class="form-control form-control-user " id="itifa2yet_mohame" name="itifa2yet_mohame" >
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
            <input type="file" class="form-control form-control-user " id="ifedet_woko3at" name="ifedet_woko3at" >
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
            <input type="file" class="form-control form-control-user " id="others1" name="others1" >
            </div>
          </div>

  </div>
</div>


<div>
  <br><br>
  <hr>
  <br><br><br><br>
</div>


<h1 class="h3 mb-0 text-danger" id="mof">مستندات وزارة الماليّة - <span class="text-gray-800">شركة</span> </h1>

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
            <input type="file" class="form-control form-control-user " id="tasjil_meliyye" name="tasjil_meliyye" >
                     
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
            <input type="file" class="form-control form-control-user " id="tasjil_vat" name="tasjil_vat" >
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
            <input type="file" class="form-control form-control-user " id="mobeshrit_3amal" name="mobeshrit_3amal" >
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
            <input type="file" class="form-control form-control-user " id="others2" name="others2" >
            </div>
          </div>

  </div>


</div>


<div>
  <br><br>
  <hr>
  <br><br><br><br>
</div>


<h1 class="h3 mb-0 text-danger" id="ssn">مستندات الصندوق الوطني للضمان الاجتماعي - <span class="text-gray-800">شركة</span> </h1>

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
            <input type="file" class="form-control form-control-user " id="shhedit_tasjil_ssn" name="shhedit_tasjil_ssn" >
                     
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
            <input type="file" class="form-control form-control-user " id="others3" name="others3" >
            </div>
          </div>

  </div>




</div>



<div>
  <br><br>
  <hr>
  <br><br><br><br>
</div>


<h1 class="h3 mb-0 text-danger" id="ot">مستندات أخرى - <span class="text-gray-800">شركة</span> </h1>

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
            <input type="file" class="form-control form-control-user " id="others4" name="others4" 
                       placeholder="الحيّ">
                     
            </div>
          </div>

    </div>






</div>







<br><br>








@endsection
