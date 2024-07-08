<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\Company;

class UserController extends Controller
{
    public function index()
    {
        $data['users'] = User::where('is_enable', 1)->get();
        return view('users.list', $data);
    }

    public function create()
    {
        if(Auth::user()->role == 1){
            $data['companies'] = Company::where('is_enable', 1)->get();
        }
        else{
            $data['companies'] = Company::where('id', Auth::user()->company_id)->where('is_enable', 1)->get();
        }
        $data['roles'] = config('constants.USER_ROLES_NAME');
        unset($data['roles'][1]);
        return view('users.create', $data);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name'      => 'required',
            'email'     => 'required|email',
            'password'  => 'required',
            'company'   => 'required',
            'role'      => 'required',
        ]);

        $user = new User();
        $user->name         = $request->name;
        $user->email        = $request->email;
        $user->password     = Hash::make($request->password);
        $user->company_id   = $request->company;
        $user->role        = $request->role;
        $user->created_by   = Auth::id();

        $response = $user->save();

        return redirect()->route('users.list')->with('success', 'User created successfully');
    }
}
