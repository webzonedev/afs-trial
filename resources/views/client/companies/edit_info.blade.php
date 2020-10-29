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
            <a href="#" class="myCardLink cardlink-active">معلومات الشركة</a> <i class="text-danger fas fa-info-circle"></i> </div>
          </div>
          
        </div>
      </div>
    </div>
  </div>


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
            <!-- <div class="row no-gutters align-items-center">
            
              
            </div> -->
           
          </div>
        
        </div>
      </div>
    </div>
  </div>

    <div class="col-xl-2 col-md-6 mb-4 " >
    <div class="card border-left-danger shadow h-100">
      <div class="card-body">
        <div class="row no-gutters align-items-center smallcardSize">
          <div class="col mr-2">
            <div class="text-xs font-weight-bold text-gray-800 text-uppercase mb-1">
            <a href="/client/companies/{{$company->id}}/files" class="myCardLink">ملفّات الشّركة</a> <i class="text-danger fas fa-upload"></i> </div>
            
              
           
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





<!-- Content Row -->
<br>
<h1 class="h3 mb-0 text-danger">تعديل معلومات الشركة</h1>
<br><br>

  <form method="POST" action="/client/companies/{{$company->id}}">
  @csrf
  @method('PUT')

<div class="row">

  <div class="col-lg-3 mb-4">
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-danger">اسم الشركة</h6>
            </div>
            <div class="card-body">
             
                      <input type="text" class="form-control form-control-user" id="c_name" name="c_name" 
                      value="{{$company->c_name}}" placeholder="اسم الشركة ...">

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

            <input type="email" class="form-control form-control-user" id="c_email" name="c_email"  
            value="{{$company->c_email}}" placeholder="البريد الالكتروني ... ">

            </div>
          </div>

  </div>

  <div class="col-lg-3 mb-4">
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-danger">نوع الشركة</h6>
            </div>
            <div class="card-body">
              
            <select class="form-control form-control-user" name="c_type" id="c_type">


                <?php 
                      $types = App\Company_type::all();
                      foreach($types as $type){
                        $var = "";

                        if($company->c_type == $type->type)
                           $var = 'selected';

                      echo "<option value='$type->type' $var > $type->type</option>";
                      }                    
                  ?>
                
                </select>

            </div>
          </div>

  </div>

 



  <div class="col-lg-3 mb-4">
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-danger">الشهرة التجارية</h6>
            </div>
            <div class="card-body">
              
            
            <input type="text" class="form-control form-control-user " id="com_fame" name="com_fame"  
                      value="{{ $company->com_fame }}" >

            </div>
          </div>

  </div>

</div>

<div class="row">

  <div class="col-lg-3 mb-4">
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-danger">الرقم المالي</h6>
            </div>
            <div class="card-body">
              
                  
            <input type="text" class="form-control form-control-user " id="f_number" name="f_number"  
                      value="{{ $company->f_number }}">

            </div>
          </div>

  </div>

  <div class="col-lg-3 mb-4">
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-danger">تاريخ التسجيل في وزارة المالية</h6>
            </div>
            <div class="card-body">
            <input type="date" class="form-control form-control-user " id="mof_date" name="mof_date"  
                      value="{{ $company->mof_date}}" >
   

            </div>
          </div>

  </div>

  <div class="col-lg-3 mb-4">
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-danger">رقم التسجيل في الضمان الاجتماعي</h6>
            </div>
            <div class="card-body">
            <input type="text" class="form-control form-control-user " id="ssn_number" name="ssn_number"  
                      value="{{$company->ssn_number }}" >
            </div>
          </div>

  </div>

  <div class="col-lg-3 mb-4">
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-danger">مكان السّجل التجاري</h6>
            </div>
            <div class="card-body">
            <input type="text" class="form-control form-control-user " id="com_reg_place" name="com_reg_place"  
                      value="{{ $company->com_reg_place }}" >
            </div>
          </div>

  </div>

</div>

<div class="row">

  <div class="col-lg-3 mb-4">
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-danger">رقم السّجلّ التجاري</h6>
            </div>
            <div class="card-body">
            <input type="text" class="form-control form-control-user " id="com_reg_number" name="com_reg_number"  
                      value="{{ $company->com_reg_number}}" >
            </div>
          </div>

  </div>

  <div class="col-lg-3 mb-4">
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-danger">تاريخ السّجلّ التجاري</h6>
            </div>
            <div class="card-body">
            <input type="date" class="form-control form-control-user " id="com_reg_date" name="com_reg_date"  
                      value="{{ $company->com_reg_date }}" >
            </div>
          </div>

  </div>

  

</div>

<div>
  <br><br>
  <hr>
  <br><br><br><br>
</div>


<div class="row">

<div class="col-lg-3 mb-4">
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-danger">ممثّل الشركة القانوني</h6>
            </div>
            <div class="card-body">
            <input type="text" class="form-control form-control-user " id="name1" name="name1"  
                      value="{{ $specialemps[0]->name }}" >
            </div>
          </div>

  </div>

  <div class="col-lg-2 mb-4">
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-danger">الصفة</h6>
            </div>
            <div class="card-body">
            <input type="text" class="form-control form-control-user " id="position1" name="position1"  
                      value="{{ $specialemps[0]->position }}" >
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
            <input type="text" class="form-control form-control-user " id="phone1" name="phone1"  
                      value="{{ $specialemps[0]->phone }}" >
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
            <input type="text" class="form-control form-control-user " id="mof_number1" name="mof_number1"  
                      value="{{ $specialemps[0]->mof_number }}" >
            </div>
          </div>

  </div>

  <div class="col-lg-2 mb-4">
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-danger"> فاكس</h6>
            </div>
            <div class="card-body">
            <input type="text" class="form-control form-control-user " id="fax1" name="fax1"  
                      value="{{ $specialemps[0]->fax }}" >
            </div>
          </div>

  </div>


</div>

<div>
  <br><br>
  <hr>
  <br><br><br><br>
</div>



<div class="row">



  <div class="col-lg-3 mb-4">
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-danger">الشخص المكلّف بتبليغ البريد</h6>
            </div>
            <div class="card-body">
            <input type="text" class="form-control form-control-user " id="name2" name="name2"  
                      value="{{ $specialemps[1]->name }}" >
            </div>
          </div>

  </div>

  <div class="col-lg-2 mb-4">
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-danger">الصفة</h6>
            </div>
            <div class="card-body">
            <input type="text" class="form-control form-control-user " id="position2" name="position2"  
                      value="{{ $specialemps[1]->position }}" >
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
            <input type="text" class="form-control form-control-user " id="phone2" name="phone2"  
                      value="{{ $specialemps[1]->phone }}" >
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
            <input type="text" class="form-control form-control-user " id="mof_number2" name="mof_number2"  
                      value="{{ $specialemps[1]->mof_number }}" >
            </div>
          </div>

  </div>

  <div class="col-lg-2 mb-4">
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-danger"> فاكس</h6>
            </div>
            <div class="card-body">
            <input type="text" class="form-control form-control-user " id="fax2" name="fax2"  
                      value="{{ $specialemps[1]->fax }}" >
            </div>
          </div>

  </div>


</div>

<div>
  <br><br>
  <hr>
  <br><br><br><br>
</div>



<div class="row">



  <div class="col-lg-3 mb-4">
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-danger">الشخص الذي يساهم بتحضير التصاريح</h6>
            </div>
            <div class="card-body">
            <input type="text" class="form-control form-control-user " id="name3" name="name3"  
                      value="{{ $specialemps[2]->name }}" >
            </div>
          </div>

  </div>

  <div class="col-lg-2 mb-4">
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-danger">الصفة</h6>
            </div>
            <div class="card-body">
            <input type="text" class="form-control form-control-user " id="position3" name="position3"  
                      value="{{ $specialemps[2]->position }}" >
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
            <input type="text" class="form-control form-control-user " id="phone3" name="phone3"  
                      value="{{ $specialemps[2]->phone }}" >
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
            <input type="text" class="form-control form-control-user " id="mof_number3" name="mof_number3"  
                      value="{{ $specialemps[2]->mof_number }}" >
            </div>
          </div>

  </div>

  <div class="col-lg-2 mb-4">
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-danger"> فاكس</h6>
            </div>
            <div class="card-body">
            <input type="text" class="form-control form-control-user " id="fax3" name="fax3"  
                      value="{{ $specialemps[2]->fax }}" >
            </div>
          </div>

  </div>


</div>

<div>
  <br><br>
  <hr>
  <br><br><br><br>
</div>


<div class="row">



  <div class="col-lg-3 mb-4">
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-danger">اسم المستخدم لدى وزارة المالية</h6>
            </div>
            <div class="card-body">
            <input type="text" class="form-control form-control-user " id="mof_uname" name="mof_uname"  
                      value="{{ $company->mof_uname }}" >
            </div>
          </div>

  </div>

  <div class="col-lg-3 mb-4">
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-danger">كلمة المرور</h6>
            </div>
            <div class="card-body">
            <input type="text" class="form-control form-control-user " id="mof_pass" name="mof_pass"  
                      value="{{ $company->mof_pass }}" >
            </div>
          </div>

  </div>


</div>

<div class="row">
  <div class="mysubmitbtn">
  <button class="btn btn-danger btn-user btn-block" type="submit">تعديل</button>
  </div>
</div>

</form>






@endsection