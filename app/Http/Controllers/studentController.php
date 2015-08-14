<?php

namespace App\Http\Controllers;

use App\Http\Requests\StudentRequest;
use App\Student;
//use Illuminate\Http\Request;
use Carbon\Carbon;
//use Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
//use Symfony\Component\HttpFoundation\Session\Session;

use Illuminate\Support\Facades\Session;

class studentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //

        $student=Student::latest()->published()->get();

        return view('student.index',compact('student'));
        //return $student;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
        //dd('create');

        return view('student.create');
    }


    /**
     * @param CreateStudentRequest $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(StudentRequest $request)
    {

      //$input=Request::all();

        //$input['publichedAt']=Carbon::now();

       $student=Student::create($request->all());
        Session::flash('flash message','Task Successfully added');
       // return redirect()->back();
        return redirect('student');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
        if (!empty($id)) {
            if (isset($id)) {
                $student=Student::findOrfail($id);
            }
        }
       // dd($student->publichedAt->DiffforHumans() );
        return view('student.show',compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
        $student=Student::FindOrFail($id);
        //return $student;
        return view('student.edit',compact('student'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id,StudentRequest $request)
    {
        $student=Student::FindOrFail($id);
        $student->update($request->all());
        return redirect('student');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
