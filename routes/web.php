<?php
use App\Models\Student;
use Illuminate\Support\Facades\Route;

Route::get('/students/create', function () {
    $student = new Student();
    $student->first_name = "John";
    $student->last_name = "Doe";
    $student->email = "johndoe@example.com";
    $student->age = 22;
    $student->save();
    return 'Student created!';
});

Route::get('/students', function () {
    $students = Student::all();
    return $students;
});

Route::get('/students/update', function () {
    $student = Student::where('email', 'johndoe@example.com')->first();
    $student->email = "john.doe@newmail.com";
    $student->age = 23; // Update age as well
    $student->save();
    return 'Student updated!';
});

Route::get('/students/delete', function () {
    $student = Student::where('email', 'john.doe@newmail.com')->first();
    $student->delete();
    return 'Student deleted!';
});

?>