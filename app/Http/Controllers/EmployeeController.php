<?php

namespace App\Http\Controllers;
use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employees= Employee::all();
        return view('employee',['employees'=>$employees, 'layout'=>'index']);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $employees= Employee::all();
        return view('employee',['employees'=>$employees, 'layout'=>'create']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $employees= new Employee();
        $employees->empID=$request->input('empID');
        $employees->employeeName=$request->input('employeeName');
        $employees->division=$request->input('division');
        $employees->age=$request->input('age');
        $employees->project=$request->input('project');
        $employees->ctc=$request->input('ctc');
        $employees->manager=$request->input('manager');
        $employees->save();
        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $employee= Employee::find($id);
        $employees= Employee::all();
        return view('employee',['employee'=>$employee, 'employees'=>$employees, 'layout'=>'show']);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $employee= Employee::find($id);
        $employees= Employee::all();
        return view('employee',['employee'=>$employee, 'employees'=>$employees, 'layout'=>'edit']);        
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
        $employee= Employee::find($id);
        $employee->empID=$request->input('empID');
        $employee->employeeName=$request->input('employeeName');
        $employee->division=$request->input('division');
        $employee->age=$request->input('age');
        $employee->project=$request->input('project');
        $employee->ctc=$request->input('ctc');
        $employee->manager=$request->input('manager');
        $employee->save();
        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $employee= Employee::find($id);
        $employee->delete();
        return redirect('/');
    }
}
