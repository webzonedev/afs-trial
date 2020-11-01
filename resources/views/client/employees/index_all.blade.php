@extends ('client/layout')

@section ('client_home_content')

<br><br>
<!-- Begin Page Content -->

<div class="container-fluid">




<!-- Content Row -->

<div class="row">

  <div class="col-lg-12 mb-4">
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-danger">الموظفين</h6>
            </div>
            <div class="card-body"> 
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead  class="mytableheader">
                    <tr>
                      <th>صورة الموظف</th>
                      <th>إسم الموظف</th>
                      <th>البريد الالكتروني للموظف</th>
                      <th>هاتف الموظّف</th>
                      <th>مكان عمل الموظف</th>
                      <th>تعديل</th>
                      <th>الغاء</th>
                    </tr>
                  </thead>
                  <tbody>
                    
                   


                   
                  </tbody>
                </table>
              </div>
            </div>
          </div>

  </div>


</div>


<a href="/client/employees/create" class=" d-sm-inline-block btn btn-sm btn-danger shadow-sm " style="margin:10px;">إنشاء موظّف &nbsp;&nbsp;<i class="fas fa-plus fa-sm text-white-50"></i> </a>


<br><br>




@endsection