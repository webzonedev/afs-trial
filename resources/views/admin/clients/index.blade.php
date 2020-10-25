@extends ('admin/layout')

@section ('admin_home_content')

<br><br>
<!-- Begin Page Content -->

<div class="container-fluid">




<!-- Content Row -->

<div class="row">

  <div class="col-lg-12 mb-4">
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-danger">العملاء</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead  class="mytableheader">
                    <tr>
                      <th>صورة العميل</th>
                      <th>إسم العميل</th>
                      <th>اسم مستخدم العميل</th>
                      <th>البريد الالكتروني للعميل</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($clients as $client)
                    <?php
                    $c= App\User::where(['profile_id' => $client->id , 'profile_type' => 'App\Client'])->first();
                    ?>
                    <tr>
                      <td><a> <i class="fas fa-user-circle" style="font-size:2rem"></i> </a></td>
                      <td><a href="" >{{$c->firstname}} {{ $c->lastname}}</a></td>
                      <td>{{$c->username}}</td>
                      <td>{{$c->email}}</td>
                    </tr>
                    @endforeach
                   
                  </tbody>
                </table>
              </div>
            </div>
          </div>

  </div>


</div>


<a href="/admin/clients/create" class=" d-sm-inline-block btn btn-sm btn-danger shadow-sm " style="margin:10px;">إنشاء عميل &nbsp;&nbsp;<i class="fas fa-plus fa-sm text-white-50"></i> </a>


<a href="#" class="d-none d-sm-inline-block btn btn-sm btn-danger shadow-sm ">إنشاء تقرير &nbsp;&nbsp;<i class="fas fa-download fa-sm text-white-50"></i> </a>






<br><br>




@endsection