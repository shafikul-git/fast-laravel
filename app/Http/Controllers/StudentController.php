<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Detail;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $studentData = Student::with('detail')->get();  // 👉 all data fetch onlne line
        // $studentData = Student::with('detail')->find(1);   // 👉 all data find one
        // echo $studentData->name . "<br>";
        // echo $studentData->detail->city;

        $studentData = Student::whereRaw('id = 2')->withWhereHas('detail', function ($query) {
            $query->where('student_id', 2);
        })->get();

        return $studentData;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $inset = Student::create([
            'name' => 'md shafikul islam',
            'age' => 44,
            'eamil' => 'shafikul@gmail.com'
        ]);
        $inset->detail()->create([
            'city' => 'mohadevpur',
            'roll' => 34,
            'card' => 345
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
