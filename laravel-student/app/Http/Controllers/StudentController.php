<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class StudentController extends Controller
{
    public function index(Student $student) {
        return view('student.modules.identity.index', [
            "data" => $student->paginate(5)
        ]);
    }

    public function store(Request $request) {
        $validateData = $request->validate([
         "name" => "required|max:100",
         "npm" => "required|max:11",
         "email" => "required|max:50",
         "prodi" => "required|max:100"
        ]);

        Student::create($validateData);

        return redirect('/')->with('success',"Data sukses disimpan");
     }

     public function edit(Student $student) {
        return view('student.modules.identity.edit', [
            "student" => $student
        ]);
     }

    public function update(Request $request, Student $student){
        $validateData = $request->validate([
            "name" => "required|max:100",
            "npm" => "required|max:11",
            "email" => "required|max:50",
            "prodi" => "required|max:100"
           ]);

        $student->where("id", $student->id)->update($validateData) ;

        return redirect('/')->with('success', 'Data sukses diupdate!');
    }

     public function destroy(Student $student) {
        $student->delete($student->id);

        return redirect('/')->with('success',"Data sukses dihapus");
     }

     public function getDataByID(Student $student) {
        return view('student.modules.identity.show', [
            "data" => $student
        ]);
     }

}
