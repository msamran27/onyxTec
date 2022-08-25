<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\Course;
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
            'firstname' => ['required','min:3','max:25'],
            'lastname' => ['required','min:3','max:25'],
            'cnic' => ['required','min:8'],
            'birthday' => ['required'],
            'age' => ['required'],
            'gender' => ['required'],

        ]);
        Student::create($request->all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $studentData = $request->except(['course_code','course_title','credit_hours']);
        $courseData = $request->only(['course_code','course_title','credit_hours']);

        $student = Student::create($studentData);

        $courseIds = explode(',', $request->course_id);
        $student->course()->sync($courseIds);
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


    public function getDataTable(Request $request){
        $query = student::select('students.*');
        return app('datatables')->eloquent($query)
            ->addIndexColumn()
            ->editColumn('firstname', function ($student) {
                return '<td class="sorting_1">
                            <span><b>' . $student->firstname . '</b></span>
                        </td>';
            })
            ->editColumn('lastname', function ($student) {
                return $student->lastname;
            })
            ->editColumn('cnic', function ($student) {
                return '<td class="sorting_1">
                            <span><b>' . $student->cnic . '</b></span>
                        </td>';
            })
            ->editColumn('birthday', function ($student) {
                return '<td class="sorting_1">
                            <span><b>' . $student->birthday . '</b></span>
                        </td>';
            })
            ->editColumn('age', function ($student) {
                return '<td class="sorting_1">
                            <span><b>' . $student->age . '</b></span>
                        </td>';
            })
            ->editColumn('gender', function ($student) {
                return '<td class="sorting_1">
                            <span><b>' . $student->gender . '</b></span>
                        </td>';
            })
            ->editColumn('created_at', function ($student) {
                return '<td class="sorting_1">
                            <span><b>' . $student->created_at . '</b></span>
                        </td>';
            })
            ->rawColumns(['firstname', 'lastname','cnic','birthday','age','gender','course_code','created_at'])
            ->make(true);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\student  $student
     * @return \Illuminate\Http\Response
     */
    public function show()
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
