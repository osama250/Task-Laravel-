<?php

namespace App\Http\Controllers\Employees;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Employee;
use App\Models\Company;
use App\Trates\Storimage;


class EmployeesController extends Controller
{

    use Storimage;

    public function index()
    {
        $employees  = Employee::get();
        return view('Employee.index',  compact('employees') );
    }

    public function create()
    {
        $companyies  = Company::get();
        return view('Employee.create' , compact('companyies') );
    }

    public function store(Request $request)
    {
        $path        = 'images/employee_img';
        $filename    = $this->Uploadphoto( $request->photo , $path );


        Employee::create([

            'name'          => $request->name ,
            'email'         => $request->email ,
            'password'      => Hash::make($request->password) ,
            'company_id'    => $request->company ,
            'image'         => $filename
        ]);

        return redirect()->route('Employee.index');

    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $emp        = Employee::findorfail($id);
        $companyies = Company::get();
        return view('Employee.edit' , compact('emp' , 'companyies'));
    }

    public function update( Request $request  )
    {
        $emp = Employee::findOrFail($request->id );
        $emp->update([
            'name'          => $request->name ,
            'email'         => $request->email ,
            'company_id'    => $request->company
        ]);
        return redirect()->route('Employee.index');
    }

    public function destroy($id)
    {
        $company = Employee::find($id)->delete();

        return redirect()->route('Employee.index');
    }
}
