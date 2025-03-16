<?php

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $students = Student::all();
    return view('student.index', ['students' => $students]);
});

Route::get('/students/create', function () {
    return view('student.create');
});

Route::post('/students', function (Request $request) {
    $validated = $request->validate([
        'first_name' => 'required|string|max:255',
        'last_name' => 'required|string|max:255',
        'email' => 'required|email|unique:students,email',
        'age' => 'required|integer|min:1',
    ]);
    
    Student::create($validated);

    return redirect('/students');
});

Route::get('/students', function () {
    $students = Student::all();
    return view('student.index', ['students' => $students]);
});

Route::get('/students/{student}/edit', function (Student $student) {
    return view('student.edit', ['student' => $student]);
});

Route::put('/students/{student}', function (Request $request, Student $student) {
    $validated = $request->validate([
        'first_name' => 'required|string|max:255',
        'last_name' => 'required|string|max:255',
        'email' => 'required|email|unique:students,email,' . $student->id,
        'age' => 'required|integer|min:1',
    ]);

    $student->update($validated);

    return redirect('/students')->with('status', 'Student updated successfully!');
});

Route::delete('/students/{student}', function (Student $student) {
    $student->delete();
    return redirect('/students');
});