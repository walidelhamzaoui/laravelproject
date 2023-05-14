<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $students = Student::all();
        return view('indexStudent',compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('studentCreate');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $student  = new Student();

        $student->name = $request->name;
        $student->age = $request->age;

        $student->save();

        return redirect(route('student.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Student $student)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Student $student)
    {
        $student = Student::find($student)->first();
        return view('studentEdit',compact('student'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Student $student)
    {
        $student = Student::find($student)->first();

        $student->name = $request->name;
        $student->age = $request->age;

        $student->update();
        return redirect(route('student.index'));

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Student $student)
    {
        $student = Student::find($student);
        $student->delete();
        return redirect(route('student.index'));

    }
}
