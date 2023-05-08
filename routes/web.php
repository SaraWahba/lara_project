<?php

use App\Http\Controllers\DepartmentController;
use App\Models\Department;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StaticController;
use App\Http\Controllers\SubjectController;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/
                //name controller        name function
// Route::get('/',[StaticController::class,'home']);
// Route::get('/createdepartment',[StaticController::class,'createdepartment']);
Route::get('/',function(){
    return view('home');
 });

// Route::get('/createdepartment',function(){
//     return view('department.create');
//  });



//  Route::get('/department', function () {
//     $department = Department::get();
//     return view('department.show',['departments' =>$department]);
// });

//form
// Route::get('/department/create',function () {
//     $department = Department::get();
//     return view('department.create',['departments' =>$department]);
// });

// Route::post('/department',function (Request $request) {
//    dd($request);
// });

Route::get('/subject',function () {
    return view('subjects.create');
});
Route::resource('/department',DepartmentController::class);

Route::resource('/subjects',SubjectController::class);