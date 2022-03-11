<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class StudentController extends Controller
{
    public function show(){

        $students = DB::select('select * from Student');
        // dd($students);
        return view('student',['students'=>$students]);
    }
}
