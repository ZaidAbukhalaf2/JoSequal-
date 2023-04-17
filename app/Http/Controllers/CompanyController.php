<?php

namespace App\Http\Controllers;

use alert;
use App\Models\Companies;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\CompanyRequest;

class CompanyController extends Controller
{

    protected $companies;
    public function __construct(Companies $companies){

        $this->companies = $companies;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $companies = $this->companies::paginate(10);

        return view('Admin.Company.list',compact('companies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.Company.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CompanyRequest $request)
    {
        $company = $this->companies;

        $company->name = $request->name;
        $company->email = $request->email;
        $company->website = $request->website;
        if ($request->hasFile('logo')) {
            $file = $request->file('logo');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '' . $extension;
            $file->storeAs('public/company/', $filename);
            $company->logo = $filename;
        }
        $company->save();
        alert()->success('Congrats',' Create Company Successfully');

        return redirect()->route('Company.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $company = $this->companies::findOrFail($id);

        return view('Admin.Company.show',compact('company'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $company = $this->companies::findOrFail($id);

        return view('Admin.Company.edit',compact('company'));    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $company = $this->companies::findOrFail($id);
        $company->name = $request->name;
        $company->email = $request->email;
        $company->website = $request->website;
        if ($request->hasFile('logo')) {
            $file = $request->file('logo');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '' . $extension;
            $file->storeAs('public/company/', $filename);
            $company->logo = $filename;
        }
        $company->save();
        alert()->success('Congrats',' Update Company Successfully');

        return redirect()->route('Company.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $company = $this->companies::findOrFail($id);
        $company->delete();

        return redirect()->route('Company.index');
    }
}
