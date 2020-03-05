<?php

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/rough', function () {
    return view('dashboard');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/companies', 'PageController@company_list')->name('companies');
Route::get('/certificates/{logo}', 'PageController@certificates')->name('certificates');


Route::get('/testimonial', 'PageController@testimonial')->name('testimonial');
Route::get('/testimonial_as_per_company/{logo}', 'PageController@testimonialAsPerCompany')->name('testimonialAsPerCompany');
Route::get('/testimonial_list_as_per_company/{logo}/{local_global}', 'PageController@testimonialListAsPerCompany')->name('testimonialListAsPerCompany');

Route::get('/list-of-Key-technician', 'PageController@listofKeyTechnician')->name('listofKeyTechnician');
Route::get('/technical-training-certificates', 'PageController@technicalTrainingCertificates')->name('technicalTrainingCertificates');
Route::get('/list-of-equipment-users', 'PageController@listofEquipmentUsers')->name('listofEquipmentUsers');


Route::get('/specifications', 'PageController@specifications')->name('specifications');

Route::get('/comparison', 'PageController@comparison')->name('comparison');
Route::get('/lock-key-features', 'PageController@lockKeyFeatures')->name('lockKeyFeatures');

Route::get('/Specification-Change-Before-Submitting', 'PageController@specificationChangeBeforeSubmitting')->name('specificationChangeBeforeSubmitting');

Route::get('/Institution-With-Date-of-Submission', 'PageController@institutionWithDateofSubmission')->name('institutionWithDateofSubmission');
Route::get('/Product-List-With-Quoted-Prices', 'PageController@productListWithQuotedPrices')->name('productListWithQuotedPrices');


Route::get('/catalogues', 'PageController@catalogues')->name('catalogues');

Route::get('/private', 'PageController@private')->name('private');
Route::get('/government', 'PageController@government')->name('government');

