<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WelcomeController extends Controller
{
    public function index()
    {
        // 1. using raw Sql queries
        // $users = DB::select('select * from users');
        // dd($users);
        // // 2. Query builder
        // $users=DB::table('users')->select(['name','email'])->whereNotNull('email')->orderBy('name')->get();
        // dd($users);
        // 3. Elouent ORM
        //$students = Student::all();
        // $students = Student::select(['name', 'email'])->whereNotNull('email')->orderBy('name')->get();
        // dd($students);
        // foreach ($students as $student) {
        //     echo $student->name . "<br>";
        // }
        $student = new Student();
        $student->name = "New";
        $student->email = "email@email.com";
        $student->save();
    }
}
