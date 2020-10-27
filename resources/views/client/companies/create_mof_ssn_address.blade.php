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
<h1 class="h3 mb-0 text-danger">عنوان الشركة لدى وزارة الماليّة - <span class="text-gray-800">شركة</span> </h1>

<br><br>



        <form  method="POST" action="/client/companies/{{$company->id}}/mof_ssn_address">
          @csrf

<div class="row">



    <div class="col-lg-2 mb-4">
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-danger">
                المحافظة
              </h6>
            </div>
            <div class="card-body">
            <select class="form-control form-control-user " id="governorate1" name="governorate1" 
                      value="{{ old('governorate1') }}">

            <option value="0">اختر المحافظة...</option>
            <option value="بيروت" >
              بيروت

            </option>
            <option value="جبل لبنان" >
              جبل لبنان

            </option>
            
            </select>
                     
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
            <select class="form-control form-control-user" id="district1" name="district1" 
                      value="{{ old('district1') }}">

            <option value="0">اختر القضاء...</option>
            <option value="بيروت">
              بيروت
            </option>
            <option value="عاليه">
              عاليه
            </option>
            
            </select>



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
            <input type="text" class="form-control form-control-user " id="street1" name="street1" 
                      value="{{ old('street1') }}" placeholder="الشارع">
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
            <input type="text" class="form-control form-control-user " id="neighborhood1" name="neighborhood1" 
                      value="{{ old('neighborhood1') }}" placeholder="الحيّ">
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
            <input type="text" class="form-control form-control-user " id="real_estate_area1" name="real_estate_area1" 
                      value="{{ old('real_estate_area1') }}" placeholder="المنطقة العقارية">
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
            <input type="text" class="form-control form-control-user " id="real_estate_number1" name="real_estate_number1" 
                      value="{{ old('real_estate_number1') }}" placeholder="رقم العقار">
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
            <input type="text" class="form-control form-control-user " id="division_number1" name="division_number1" 
                      value="{{ old('division_number1') }}" placeholder="رقم القسم">
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
            <input type="text" class="form-control form-control-user " id="building1" name="building1" 
                      value="{{ old('building1') }}" placeholder="المبنى">
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
            <input type="text" class="form-control form-control-user " id="floor1" name="floor1" 
                      value="{{ old('floor1') }}" placeholder="الطابق">
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
                      value="{{ old('phone1') }}" placeholder="هاتف">
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
            <input type="text" class="form-control form-control-user " id="fax1" name="fax1" 
                      value="{{ old('fax1') }}" placeholder="فاكس">
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
            <input type="text" class="form-control form-control-user " id="mailbox1" name="mailbox1" 
                      value="{{ old('mailbox1') }}" placeholder="صندوق بريد">
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
            <input type="text" class="form-control form-control-user " id="region1" name="region1" 
                      value="{{ old('region1') }}" placeholder="المنطقة">
            </div>
          </div>

  </div>

  <div class="col-lg-2 mb-4">
            <!-- DataTales Example -->
            <div class="card shadow mb-4">
              <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-danger">
                تاريخ تغيير العنوان
                </h6>
              </div>
              <div class="card-body">
              <input type="date" class="form-control form-control-user " id="changed_date1" name="changed_date1" 
                      value="{{ old('changed_date1') }}" >
              </div>
            </div>

    </div>


</div>


<div>
  <br><br>
  <hr>
  <br><br><br><br>
</div>

<!-- SSN ADDRESS ========= Content Row -->
<br>


<h1 class="h3 mb-0 text-danger">عنوان الشركة لدى الصندوق الوطني للضمان الاجتماعي  - <span class="text-gray-800">شركة</span>  
<br>
<br>
<a class="btn btn-danger btn-user "  style="color:white" onclick="copyAddress();"><i class="fas fa-copy" ></i> نسخ عنوان وزارة المالية</a>
<br><br><br>
</h1>


<script>


function copyAddress(){


        $('#governorate2').val( $('#governorate1').val()  ); 
        $('#district2').val( $('#district1').val()  ); 
        $('#street2').val( $('#street1').val()  ); 
        $('#neighborhood2').val( $('#neighborhood1').val()  ); 
        $('#real_estate_area2').val( $('#real_estate_area1').val()  ); 
        $('#real_estate_number2').val( $('#real_estate_number1').val()  ); 
        $('#division_number2').val( $('#division_number1').val()  ); 
        $('#building2').val( $('#building1').val()  ); 
        $('#floor2').val( $('#floor1').val()  ); 
        $('#phone2').val( $('#phone1').val()  ); 
        $('#fax2').val( $('#fax1').val()  ); 
        $('#mailbox2').val( $('#mailbox1').val()  ); 
        $('#region2').val( $('#region1').val()  ); 
        $('#changed_date2').val( $('#changed_date1').val()  );
        

}


</script>


    <div class="mysubmitbtn">
   
    </div>


<div class="row">



    <div class="col-lg-2 mb-4">
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-danger">
                المحافظة
              </h6>
            </div>
            <div class="card-body">
            <select class="form-control form-control-user " id="governorate2" name="governorate2" 
                      value="بيروت">

            <option value="0">اختر المحافظة...</option>
            <option value="بيروت" >
              بيروت

            </option>
            <option value="جبل لبنان" >
              جبل لبنان

            </option>
            
            </select>
                     
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
            <select class="form-control form-control-user" id="district2" name="district2" 
                      value="{{ old('district2') }}">

            <option value="0">اختر القضاء...</option>
            <option value="بيروت">
              بيروت
            </option>
            <option value="عاليه">
              عاليه
            </option>
            
            </select>



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
            <input type="text" class="form-control form-control-user " id="street2" name="street2" 
                      value="" placeholder="الشارع">
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
            <input type="text" class="form-control form-control-user " id="neighborhood2" name="neighborhood2" 
                      value="{{ old('neighborhood2') }}" placeholder="الحيّ">
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
            <input type="text" class="form-control form-control-user " id="real_estate_area2" name="real_estate_area2" 
                      value="{{ old('real_estate_area2') }}" placeholder="المنطقة العقارية">
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
            <input type="text" class="form-control form-control-user " id="real_estate_number2" name="real_estate_number2" 
                      value="{{ old('real_estate_number2') }}" placeholder="رقم العقار">
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
            <input type="text" class="form-control form-control-user " id="division_number2" name="division_number2" 
                      value="{{ old('division_number2') }}" placeholder="رقم القسم">
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
            <input type="text" class="form-control form-control-user " id="building2" name="building2" 
                      value="{{ old('building2') }}" placeholder="المبنى">
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
            <input type="text" class="form-control form-control-user " id="floor2" name="floor2" 
                      value="{{ old('floor2') }}" placeholder="الطابق">
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
                      value="{{ old('phone2') }}" placeholder="هاتف">
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
            <input type="text" class="form-control form-control-user " id="fax2" name="fax2" 
                      value="{{ old('fax2') }}" placeholder="فاكس">
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
            <input type="text" class="form-control form-control-user " id="mailbox2" name="mailbox2" 
                      value="{{ old('mailbox2') }}" placeholder="صندوق بريد">
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
            <input type="text" class="form-control form-control-user " id="region2" name="region2" 
                      value="{{ old('region2') }}" placeholder="المنطقة">
            </div>
          </div>

  </div>

  <div class="col-lg-2 mb-4">
            <!-- DataTales Example -->
            <div class="card shadow mb-4">
              <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-danger">
                تاريخ تغيير العنوان
                </h6>
              </div>
              <div class="card-body">
              <input type="date" class="form-control form-control-user " id="changed_date2" name="changed_date2" 
                      value="{{ old('changed_date2') }}" >
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





@endsection