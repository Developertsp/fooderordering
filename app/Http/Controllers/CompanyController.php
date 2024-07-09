<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company;
use Illuminate\Support\Facades\Auth;

class CompanyController extends Controller
{
    public function index()
    {
        $data['companies'] = Company::where('is_enable', 1)->get();
        return view('companies.list', $data);
    }

    public function create()
    {
        return view('companies.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name'      => 'required',
            'email'     => 'required|email',
            'address'   => 'required',
        ]);

        $company = new Company();
        $company->name = $request->name;
        $company->email = $request->email;
        $company->address = $request->address;
        $company->created_by = Auth::user()->id;

        $response = $company->save();

        return redirect()->route('companies.list')->with('success', 'Company created successfully');
    }

    public function edit($id)
    {

    }

    public function update(Request $request)
    {

    }

    public function destroy($id)
    {
        
    }
}
