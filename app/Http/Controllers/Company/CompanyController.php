<?php

namespace App\Http\Controllers\Company;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Company;
use App\Models\Employee;
use App\Trates\Storimage;

class CompanyController extends Controller
{

    use Storimage;

    public function index()
    {
        $companies  = Company::get();
        return view('Company.index' , compact('companies') );

    }

    public function create()
    {
        return view('Company.create');
    }

    public function store(Request $request)
    {
              //upload image
              $path        = 'images/company_img';
              $filename    = $this->Uploadphoto( $request->photo , $path );

       Company::create([
            'name'    => $request->name ,
            'adress'  => $request->adress ,
            'logo'    => $filename
       ]);

       return redirect()->route('Comapny.index');
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        $com = Company::findorfail($id);
        return view('Company.edit' , compact('com'));
    }

    public function update( Request $request  )
    {
        $company = Company::findOrFail($request->id );
        $company->update([
            'name'    => $request->name ,
            'adress'  => $request->adress ,
        ]);

        return redirect()->route('Comapny.index');
    }

    public function destroy($id)
    {
        $company = Company::find($id)->delete();

        return redirect()->route('Comapny.index');
    }
}
