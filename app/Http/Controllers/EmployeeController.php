<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\EmployeeRequest;
use App\Models\Companies;
use App\Models\Employees;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{

    protected $employees;
    protected $companies;
    public function __construct(Employees $employees ,Companies $companies){

        $this->employees = $employees;
        $this->companies = $companies;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employees = $this->employees::paginate(10);

        return view('Admin.Employee.list',compact('employees'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $companies = $this->companies::all();
        return view('Admin.Employee.create',compact('companies'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(EmployeeRequest $request)
    {
        $employee = $this->employees;

        $employee->First_name = $request->First_name;
        $employee->Last_name = $request->Last_name;
        $employee->email = $request->email;
        $employee->company_id = $request->company_id;
        $employee->phone = $request->phone;
        $employee->save();
        alert()->success('Congrats',' Create Employee Successfully');

        return redirect()->route('Employee.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $employee = $this->employees::findOrFail($id);

        return view('Admin.Employee.show',compact('employee'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $employee = $this->employees::findOrFail($id);
        $companies = $this->companies::all();

        return view('Admin.Employee.edit',compact('companies','employee'));
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
        $employee = $this->employees::findOrFail($id);
        $employee->First_name = $request->First_name;
        $employee->Last_name = $request->Last_name;
        $employee->email = $request->email;
        $employee->company_id =$request->company_id;

        $employee->save();
        alert()->success('Congrats',' Update Employee Successfully');

        return redirect()->route('Employee.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $employee = $this->employees::findOrFail($id);
        $employee->delete();
        return redirect()->route('Employee.index');
    }
}
