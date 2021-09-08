  
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SchoolClassController;
use App\Http\Controllers\StudentController;


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');




Route::group(['prefix' => 'schoolClasses'], function(){
   Route::get('', [SchoolClassController::class, 'index'])->name('schoolClass.index');
   Route::get('create', [SchoolClassController::class, 'create'])->name('schoolClass.create');
   Route::post('store', [SchoolClassController::class, 'store'])->name('schoolClass.store');
   Route::get('edit/{schoolClass}', [SchoolClassController::class, 'edit'])->name('schoolClass.edit');
   Route::post('update/{schoolClass}', [SchoolClassController::class, 'update'])->name('schoolClass.update');
   Route::post('delete/{schoolClass}', [SchoolClassController::class, 'destroy'])->name('schoolClass.destroy');
   Route::get('show/{schoolClass}', [SchoolClassController::class, 'show'])->name('schoolClass.show');
});

Route::group(['prefix' => 'students'], function(){
    Route::get('', [StudentController::class, 'index'])->name('student.index');
    Route::get('create', [StudentController::class, 'create'])->name('student.create');
    Route::post('store', [StudentController::class, 'store'])->name('student.store');
    Route::get('edit/{student}', [StudentController::class, 'edit'])->name('student.edit');
    Route::post('update/{student}', [StudentController::class, 'update'])->name('student.update');
    Route::post('delete/{student}', [StudentController::class, 'destroy'])->name('student.destroy');
    Route::get('show/{student}', [StudentController::class, 'show'])->name('student.show');
 });
 