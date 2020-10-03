<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;






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

Route::get('/admin', function () {
    return view('layout.admin_student');
});

Route::get('/students', function () {
	//su dung query builder
	//lay ra mang students
   // return DB::table('students')->get();
    //lay ra 1 students
   //  return DB::table('students')->where('id', '=', 2)->get();
 $student = DB::table('students')->get();
return view('students.detail', ['studentValue' => $student ]);

});

Route::get('/student_list', function () {
	$student = DB::table('students')->orderBy('id', 'asc')->get();
	$null="khong co loi gi - chao anh Ha dep trai";

    return view('students.list', [
    	'studentList' => $student ,
    	'err'=>$null
    ]);
})->name('list_student');


// Route::get('/students/{id}/{age}', function ($id, $age) {
//    dd('gia tri:'.$id. ' va '.$age);

//    });

// Route::get('/students/detail', function () {
//   return view('students.detail');

//    });

// //cach 2
// Routes::view('/students/detail-2','students.detail');


//chuc nang login + route post
Route::get('/login', function () {

    return view('login');
})->name('get_login');

Route::post('/post_login', function (Request $request) {
	//xu ly logic, truy van...
  
    $name= $request->name;

    $student=DB::table('students')->where('name', 'like', "%$name%")->first();

    if($student){
		return redirect()->route('list_student');
    }else{
    	return redirect()->route('get_login');
    }
})->name('post_login');