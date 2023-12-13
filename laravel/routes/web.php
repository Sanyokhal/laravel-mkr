<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentsController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/student', [StudentsController::class, 'index']);
Route::get('/student/course', function (\Illuminate\Http\Request $request) {
    $query = \App\Models\Student::query();
    if($request->input('course')){
        $query->where('course', $request->input('course'));
        return view('students.index', ['students' => $query->get(), 'course' => $request->input('course')]);
    }else {
        return view('students.index', ['students' => $query->get(), 'course' => $request->input('course')]);
    }
})->name('course.sort');
Route::get('/student/{id}', [StudentsController::class, 'show']);
Route::delete('/student/mark/{id}', [StudentsController::class, 'delete'])->name('mark.delete');
