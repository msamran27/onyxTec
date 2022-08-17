<?php

namespace App\Http\Controllers;

use App\Models\student;
use App\Models\Courses;
use App\Http\Requests\StorestudentRequest;
use App\Http\Requests\UpdatestudentRequest;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $request->validate([
            'firstname'=>['required','min:3','max:25'],
            'lastname'=>['required','min:3','max:25'],
            'cnic'=>['required','min:8'],
            'birthday'=>['required'],
            'age'=>['required'],
            'gender'=>['required'],

        ]);
        student::create($request->all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
       $Student= new Student;
       $Student->firstname=$request->firstname;
       $Student->lastname=$request->lastname;
       $Student->cnic=$request->cnic;
       $Student->birthday=$request->birthday;
       $Student->age=$request->age;
       $Student->gender=$request->gender;
       $Student->save();

       $Courses= new Courses;
       $Courses->course_code=$request->course_code;
       $Courses->course_title=$request->course_title;
       $Courses->credit_hours=$request->credit_hours;
       $Courses->save();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorestudentRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorestudentRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(student $student)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(student $student)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatestudentRequest  $request
     * @param  \App\Models\student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatestudentRequest $request, student $student)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(student $student)
    {
        //
    }
}
