<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Auth::routes();




Route::get('/', function () {
    return view('/auth/login');
});

// Route::get('/home', 'HomeController@index')->name('home');


//admin : 

Route::group(['middleware' => ['can:access-admin']], function () {
    // Routes available to admin user only.







Route::get('/admin','Admin\AdminController@index');

//admin_clients :

Route::get('/admin/clients', 'Admin\ClientsController@index');

Route::get('/admin/clients/create', 'Admin\ClientsController@create');

Route::post('/admin/clients/', 'Admin\ClientsController@store');


// Route::get('/admin/client/1', 'Admin\EmployeeController@show_info');


//admin_companies :

Route::get('/admin/companies/', 'Admin\CompaniesController@index');

Route::get('/admin/companies/{company}', 'Admin\CompaniesController@show_info');

Route::get('/admin/companies/{company}/mof_address', 'Admin\CompaniesController@show_mof_address');

Route::get('/admin/companies/{company}/ssn_address', 'Admin\CompaniesController@show_ssn_address');




//admin_employees :
Route::get('/admin/employee/', 'Admin\EmployeeController@index');
Route::get('/admin/employee/show', 'Admin\EmployeeController@show_info');


});








//client :


Route::group(['middleware' => ['can:access-client']], function () {
    // Routes available to client user only.

Route::get('/client','Client\ClientController@index');


//client_companies :


Route::get('/client/companies/', 'Client\CompaniesController@index');

Route::post('/client/companies/', 'Client\CompaniesController@store_info');

Route::get('/client/companies/create', 'Client\CompaniesController@create_info');

Route::post('/client/companies/{company}/mof_ssn_address', 'Client\MofSsnAddressController@store_mof_ssn_address');

Route::get('/client/companies/{company}/mof_ssn_address/create', 'Client\MofSsnAddressController@create_mof_ssn_address');

Route::post('/client/companies/{company}/lawyer', 'Client\CompanyLawyerController@store');

Route::get('/client/companies/{company}/lawyer/create', 'Client\CompanyLawyerController@create');





Route::get('/client/companies/{company}/files/upload', 'Client\CompanyFilesController@before_upload_files');

Route::get('/client/companies/{company}/files/{id}/download', 'Client\CompanyFilesController@download_files');

Route::get('/client/companies/{company}/files/{id}/delete', 'Client\CompanyFilesController@delete_file');

Route::get('/client/companies/{company}/files/delete', 'Client\CompanyFilesController@delete_all_files');

Route::put('/client/companies/{company}/files/upload', 'Client\CompanyFilesController@upload_files');

Route::get('/client/companies/{company}/files/', 'Client\CompanyFilesController@index_files');






Route::get('/client/companies/{company}', 'Client\CompaniesController@show_info');

Route::get('/client/companies/{company}/edit', 'Client\CompaniesController@edit_info');

Route::put('/client/companies/{company}', 'Client\CompaniesController@update_info');






Route::get('/client/companies/{company}/mof_ssn_address', 'Client\MofSsnAddressController@show_mof_ssn_address');

Route::get('/client/companies/{company}/mof_ssn_address/edit', 'Client\MofSsnAddressController@edit_mof_ssn_address');

Route::put('/client/companies/{company}/mof_ssn_address', 'Client\MofSsnAddressController@update_mof_ssn_address');




Route::get('/client/companies/{company}/lawyer', 'Client\CompanyLawyerController@show');

Route::get('/client/companies/{company}/lawyer/edit', 'Client\CompanyLawyerController@edit');

Route::put('/client/companies/{company}/lawyer', 'Client\CompanyLawyerController@update');




//client_employees :

Route::get('/client/employees/', 'Client\EmployeesController@index_all');

Route::get('/client/companies/{company}/employees/', 'Client\EmployeesController@index_single');

Route::get('/client/companies/{company}/employees/register', 'Client\EmployeesController@register_employee');


Route::post('/client/companies/{company}/employees/', 'Client\EmployeesController@store_employee');


Route::get('/client/companies/{company}/employees/create', 'Client\EmployeesController@create_info');


Route::post('/client/companies/{company}/employees/{employee}', 'Client\EmployeesController@store_info');

Route::get('/client/companies/{company}/employees/{employee}', 'Client\EmployeesController@show_info');

Route::get('/client/companies/{company}/employees/{employee}/edit', 'Client\EmployeesController@edit_info');

Route::put('/client/companies/{company}/employees/{employee}', 'Client\EmployeesController@update_info');

});

//employee :


Route::group(['middleware' => ['can:access-employee']], function () {
    // Routes available to client user only.

Route::get('/employee','Employee\EmployeeController@show_info');







});









