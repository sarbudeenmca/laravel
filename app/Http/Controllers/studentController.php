<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class studentController extends Controller {
    public function insert_form() {
        return view('/insert_form');
    }

    public function insert(Request $request) {
        $name = $request->input('student_name');
        //Insert Operation
        DB::insert('INSERT INTO students(name) VALUES(?)', [$name]);
        return "Record Inserted Successfully <a href='/insert_form'>Click here to go back</a><br>
        <a href='/view_students'>Click here to view Students</a>
        ";
    }

    public function students_list() {
        //Select Operation
        $students = DB::select("SELECT * FROM students");
        return view('students_list', ['students' => $students]);
    }

    public function retrive($id) {
        $student = DB::select('SELECT * FROM students WHERE id=?', [$id]);
        return view('student_edit', compact('student'));
    }

    public function update(Request $request, $id) {
        $name = $request->input('student_name');
        DB::update('UPDATE students SET name=? WHERE id=?', [$name, $id]);
        return "Student record updated successfully. <a href='/view_students'>Go to Students List</a>";
    }

    public function delete($id) {
        DB::delete('DELETE FROM students WHERE id=?', [$id]);
        return "Record Deleted Successfully. <a href='/view_students'>Go to Students List</a>";
    }

    public function delete_all() {
        DB::statement('TRUNCATE TABLE students');
        return "All Student Records Deleted <a href='/view_students'>Go to Students List</a>";
    }
}
