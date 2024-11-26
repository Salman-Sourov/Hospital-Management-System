<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;

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




Route::get('dept_details/', function () {
    return view('frontend.departmentDetails');
});

Route::get('about/', function () {
    return view('frontend.about_us');
});

Route::get('mrd/', function () {
    return view('frontend.mrd');
});


Route::get('videos/', function () {
    return view('frontend.videos');
});

Route::get('ad/', function () {
    return view('admin.dashboard');
});

















Route::get('signin/', function () {
    return view('auth.login');
});
Route::get('logout/', function () {
    return view('profile.logout-other-browser-sessions-form');
});
Route::get('profile/', function () {
    return view('profile.show');
});



Route::get('/mobile/', [AdminController::class, 'ShowDoc'])->name('mobile');
Route::get('/doctors', [UserController::class, 'ShowDoctor'])->name('doctors');
Route::get('/blogs', [UserController::class, 'ShowBlogs'])->name('blogs');
Route::get('/blogdetails/{id}', [UserController::class, 'blogDetails'])->name('blogdetails');
Route::get('/appForm/{id}', [UserController::class, 'formData'])->name('appForm');
Route::post('/ad_dept', [AdminController::class, 'addDepartment'])->name('ad_dept');
Route::get('/', [AdminController::class, 'department'])->name('/');
Route::post('/', [AdminController::class, 'appoinment'])->name('/');
Route::post('/ad_content', [AdminController::class, 'addContent'])->name('ad_content');
Route::post('/ad_blog', [AdminController::class, 'addBlog'])->name('ad_blog');
Route::post('/ad_doctor', [AdminController::class, 'addDoctor'])->name('ad_doctor');
Route::post('/ad_admin', [AdminController::class, 'addAdmin'])->name('ad_admin');
Route::get('/parents', [AdminController::class, 'parents'])->name('parents');
Route::get('/parents/{id}', [AdminController::class, 'parents'])->name('parents');
Route::get('/docs/{doctID}', [AdminController::class, 'docs'])->name('docs');
Route::get('/deptdoc/{id}', [UserController::class, 'dept_doc'])->name('dept_doc');
Route::get('/doctorProfile/{id}', [UserController::class, 'doctorProfile'])->name('doctorProfile');
Route::get('/dept_details/{id}', [UserController::class, 'departmentDetails'])->name('dept_details');
Route::get('/pdf', [UserController::class, 'pdfDownload'])->name('pdf');
Route::get('/downloadpdf', [UserController::class, 'pdfDownload'])->name('downloadpdf');
Route::get('/service', [UserController::class, 'ShowService'])->name('service');
Route::get('/photos', [UserController::class, 'ShowPhotos'])->name('photos');

Route::get('/patientinfo', [UserController::class, 'patientInfo'])->name('patientinfo');
Route::post('/addPatientinfo', [AdminController::class, 'addPatientinfo'])->name('addPatientinfo');
Route::post('/addservice', [AdminController::class, 'addService'])->name('addservice');
Route::redirect(uri: 'signin', destination: 'dashboard');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
  
    Route::get('/dashboard', [AdminController::class, 'allInfo'])->name('dashboard');

    Route::get('/ad_admin', [AdminController::class, 'allAdmin'])->name('ad_admin');

   
    Route::get('/addPatientinfo', [AdminController::class, 'allPatientInfo'])->name('addPatientinfo');


   
    Route::get('/addservice', [AdminController::class, 'allService'])->name('addservice');


    Route::get('/ad_dept', [AdminController::class, 'allDepartment'])->name('ad_dept');

   
    Route::get('/ad_content', [AdminController::class, 'allContent'])->name('ad_content');
    Route::post('/ad_poster', [AdminController::class, 'Poster'])->name('ad_poster');
    Route::get('/ad_poster', [AdminController::class, 'allPoster'])->name('ad_poster');
    
    Route::get('/ad_doctor',[AdminController::class,'doctorlist'])->name('ad_doctor');

    Route::get('/ad_blog',[AdminController::class,'allBlog'])->name('ad_blog');
    Route::get('/all_appoinment/{id}',[AdminController::class,'docAppoinment'])->name('all_appoinment');
    Route::get('/blog_delete/{id}',[AdminController::class,'blogDelete'])->name('blog_delete');
    Route::get('/info_delete/{id}',[AdminController::class,'infoDelete'])->name('info_delete');
    Route::get('/poster_delete/{id}',[AdminController::class,'posterDelete'])->name('poster_delete');
    Route::get('/doctor_delete/{id}',[AdminController::class,'doctorDelete'])->name('doctor_delete');
    Route::get('/department_delete/{id}',[AdminController::class,'departmentDelete'])->name('department_delete');
    Route::get('/photo_delete/{id}',[AdminController::class,'photoDelete'])->name('photo_delete');
    Route::get('/service_delete/{id}',[AdminController::class,'serviceDelete'])->name('service_delete');
    Route::get('/appoinment_delete/{id}',[AdminController::class,'appoinmentDelete'])->name('appoinment_delete');
    

    Route::get('/edit_blog/{id}',[AdminController::class,'editBlog'])->name('edit_blog');
    Route::post('/edit_blog',[AdminController::class,'editBlogfinal'])->name('edit_blog');


    Route::get('/edit_doctor/{id}',[AdminController::class,'editDoctor'])->name('edit_doctor');
    Route::post('/edit_doctor',[AdminController::class,'editDoctorfinal'])->name('edit_doctor');


    Route::get('/all_appoinment',[AdminController::class,'allAppoinment'])->name('all_appoinment');
    Route::post('/all_appoinment', [AdminController::class, 'searchBydate'])->name('all_appoinment');



    Route::get('/ad_about_us', [AdminController::class, 'allAbout'])->name('ad_about_us');
    Route::get('/about_delete/{id}',[AdminController::class,'aboutDelete'])->name('about_delete');
    Route::post('/ad_about_submit', [AdminController::class, 'aboutAdd'])->name('ad_about_submit');
    
    Route::get('/ad_mrd', [AdminController::class, 'mrd'])->name('ad_mrd');
    Route::get('/ad_mrd/delete/{id}',[AdminController::class,'mrdDelete'])->name('ad_mrd_delete');
    Route::post('/ad_mrd_submit', [AdminController::class, 'mrdAdd'])->name('ad_mrd_submit');
    
    Route::get('/ad_mrd_main', [AdminController::class, 'mrdMain'])->name('ad_mrd_main');
    Route::get('/ad_mrd_main/delete/{id}',[AdminController::class,'mrdMainDelete'])->name('ad_mrd_main_delete');
    Route::post('/ad_mrd_main_submit', [AdminController::class, 'mrdMainAdd'])->name('ad_mrd_main_submit');
    Route::get('/resizeImages', [AdminController::class, 'resizeImages'])->name('resizeImages');
});
