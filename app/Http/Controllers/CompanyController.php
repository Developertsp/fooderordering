<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

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

        // Generate a unique token
        $token = Str::random(60);

        $company = new Company();
        $company->name = $request->name;
        $company->email = $request->email;
        $company->address = $request->address;
        $company->token = $token;
        $company->created_by = Auth::user()->id;

        $response = $company->save();

        return redirect()->route('companies.list')->with('success', 'Company created successfully');
    }

    public function edit($id)
    {
        $data['company'] = Company::find(base64_decode($id));

        return view('companies.edit', $data);
    }

    public function update(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'address' => 'required'
        ]);
        
        if($request->id){
            $data['name'] = $request->name;
            $data['email'] = $request->email;
            $data['address'] = $request->address;
            $data['updated_by'] = Auth::id();

            $company = Company::find(base64_decode($request->id));
            $response = $company->update($data);

            return redirect()->route('companies.list')->with('success', 'Company details updated successfully!');
        }

        return redirect()->route('companies.list')->with('error', 'No company found!');
    }

    public function destroy($id)
    {
        
    }
}
