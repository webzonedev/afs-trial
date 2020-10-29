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
            <a href="/client/companies/{{$company->id}}/lawyer/" class="myCardLink">محامي الشّركة</a> <i class="text-danger fas fa-gavel"></i> </div>
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
            <a href="/client/companies/{{$company->id}}/employees" class="myCardLink">موظفين الشركة</a> <i class="text-danger fas fa-user-tie"></i> </div>
            
           
          </div>
        
        </div>
      </div>
    </div>
  </div>
</div>





<!-- Content Row -->
<br>
<h1 class="h3 mb-0 text-danger">عنوان الشركة لدى وزارة الماليّة - <span class="text-gray-800">شركة</span> </h1>
<br><br>



        <form method="POST" action="/client/companies/{{$company->id}}/mof_ssn_address">
          @csrf
          @method('PUT')

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
            <select class="form-control form-control-user" id="governorate1" name="governorate1"
            onclick="selectGovernorate(this.id,'district1');selectDistrict('district1','real_estate_area1');" >
            

            <option value="لا شيء" >
              لا شيء
            </option>


            <option value="بيروت"  {{ $mof_address != null && $mof_address->governorate == 'بيروت' ? 'selected' : '' }}>
              بيروت

            </option>
            <option value="جبل لبنان" >
              جبل لبنان

            </option>

            <option value="الشّمال" {{ $mof_address != null && $mof_address->governorate == 'الشّمال' ? 'selected' : '' }}>
                الشمال

            </option>
            
            <option value="الجنوب"  {{ $mof_address != null && $mof_address->governorate == 'الجنوب' ? 'selected' : '' }}>
                الجنوب

            </option>

            <option value="البقاع" {{ $mof_address != null && $mof_address->governorate == 'البقاع' ? 'selected' : '' }}>
            البقاع

            </option>

            <option value="النّبطيّة" {{ $mof_address != null && $mof_address->governorate == 'النّبطيّة' ? 'selected' : '' }}>
            النّبطيّة 

            </option>

            <option value="عكّار" {{ $mof_address != null && $mof_address->governorate == 'عكّار' ? 'selected' : '' }}>
             عكّار  

            </option>

            <option value="بعلبك الهرمل" {{ $mof_address != null && $mof_address->governorate == 'بعلبك الهرمل' ? 'selected' : '' }}>
                بعلبك الهرمل

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
            <select class="district form-control form-control-user " id="district1" name="district1" {{ $mof_address == null ? 'disabled' : '' }}
            onchange="selectDistrict(this.id,'real_estate_area1');">

            <option value="{{ $mof_address != null ? $mof_address->district : 'لا شيء' }}" selected>{{ $mof_address != null ? $mof_address->district : 'لا شيء' }}</option>

            
            
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
                      value="{{ $mof_address != null ? $mof_address->street : '' }}" placeholder="الشارع">
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
                      value="{{ $mof_address != null ? $mof_address->neighborhood : '' }}" placeholder="الحيّ">
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
            <select class="real_estate_area form-control form-control-user" id="real_estate_area1" name="real_estate_area1" {{ $mof_address == null ? 'disabled' : '' }} > 

            <option value="{{ $mof_address != null ? $mof_address->real_estate_area : 'لا شيء' }}" selected>{{ $mof_address != null ? $mof_address->real_estate_area : 'لا شيء' }}</option>



            </select>
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
                      value="{{ $mof_address != null ? $mof_address->real_estate_number : '' }}" placeholder="رقم العقار">
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
                      value="{{ $mof_address != null ? $mof_address->division_number : '' }}" placeholder="رقم القسم">
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
                      value="{{ $mof_address != null ? $mof_address->building : '' }}" placeholder="المبنى">
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
                      value="{{ $mof_address != null ? $mof_address->floor : '' }}" placeholder="الطابق">
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
                      value="{{ $mof_address != null ? $mof_address->phone : '' }}" placeholder="هاتف">
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
                      value="{{ $mof_address != null ? $mof_address->fax : '' }}" placeholder="فاكس">
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
                      value="{{ $mof_address != null ? $mof_address->mailbox : '' }}" placeholder="صندوق بريد">
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
                      value="{{ $mof_address != null ? $mof_address->region : '' }}" placeholder="المنطقة">
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
                      value="{{ $mof_address != null ? $mof_address->changed_date : '' }}" >
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
                     onclick="selectGovernorate(this.id,'dsitrict2');selectDistrict('district2','real_estate_area2');" >

                    @if ($mof_address==null){
                      <option value="لا شيء">لا شيء</option>
                    }
                    @endif

                      <option value="بيروت"  {{ $mof_address != null && $mof_address->governorate == 'بيروت' ? 'selected' : '' }}>
              بيروت

            </option>
            <option value="جبل لبنان" >
              جبل لبنان

            </option>

            <option value="الشّمال" {{ $mof_address != null && $mof_address->governorate == 'الشّمال' ? 'selected' : '' }}>
                الشمال

            </option>
            
            <option value="الجنوب"  {{ $mof_address != null && $mof_address->governorate == 'الجنوب' ? 'selected' : '' }}>
                الجنوب

            </option>

            <option value="البقاع" {{ $mof_address != null && $mof_address->governorate == 'البقاع' ? 'selected' : '' }}>
            البقاع

            </option>

            <option value="النّبطيّة" {{ $mof_address != null && $mof_address->governorate == 'النّبطيّة' ? 'selected' : '' }}>
            النّبطيّة 

            </option>

            <option value="عكّار" {{ $mof_address != null && $mof_address->governorate == 'عكّار' ? 'selected' : '' }}>
             عكّار  

            </option>

            <option value="بعلبك الهرمل" {{ $mof_address != null && $mof_address->governorate == 'بعلبك الهرمل' ? 'selected' : '' }}>
                بعلبك الهرمل

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
            <select class="district form-control form-control-user" id="district2" name="district2"
            onchange="selectDistrict(this.id,'real_estate_area2');" {{ $mof_address == null ? 'disabled' : '' }} >
                      <option value="{{ $mof_address != null ? $mof_address->district : 'لا شيء'  }}" selecteds>{{ $mof_address != null ? $mof_address->district : 'لا شيء' }}</option>
            
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
                      value="{{ $mof_address != null ? $ssn_address->street : '' }}" placeholder="الشارع">
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
                      value="{{ $mof_address != null ? $ssn_address->neighborhood : '' }}" placeholder="الحيّ">
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
            <select class="real_estate_area form-control form-control-user" id="real_estate_area2" name="real_estate_area2"
            {{ $mof_address == null ? 'disabled' : '' }}>

            <option value="{{ $mof_address != null ? $mof_address->real_estate_area : 'لا شيء'  }}" selected>{{ $mof_address != null ? $mof_address->real_estate_area : 'لا شيء'}}</option>



            </select>
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
                      value="{{ $mof_address != null ? $ssn_address->real_estate_number : '' }}" placeholder="رقم العقار">
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
                      value="{{ $mof_address != null ? $ssn_address->division_number : '' }}" placeholder="رقم القسم">
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
                      value="{{ $mof_address != null ? $ssn_address->building : '' }}" placeholder="المبنى">
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
                      value="{{ $mof_address != null ? $ssn_address->floor : '' }}" placeholder="الطابق">
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
                      value="{{ $mof_address != null ? $ssn_address->phone : '' }}" placeholder="هاتف">
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
                      value="{{ $mof_address != null ? $ssn_address->fax : '' }}" placeholder="فاكس">
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
                      value="{{ $mof_address != null ? $ssn_address->mailbox : '' }}" placeholder="صندوق بريد">
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
                      value="{{ $mof_address != null ? $ssn_address->region : '' }}" placeholder="المنطقة">
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
                      value="{{ $mof_address != null ? $ssn_address->changed_date : '' }}" >
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