<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class StudentController extends Controller
{
    public function show(){

         // dd($students);

        DB::insert('insert into Student (name,email,city) values(?,?,?)',['Anitha','anitha@gmail.com','kerala']);
        // $students = DB::select('select * from Student where city = ?',['Kanpur']);
        $students = DB::select('select * from Student');
        DB::update('update student set city=? WHERE ID =?',['TVM',1]);
        DB::delete('delete from Student where id=?',[6]);
        return view('student',['students'=>$students]);
    }
}
