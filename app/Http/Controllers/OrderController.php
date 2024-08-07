<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function index()
    {
        $companyId = Auth::user()->company_id;
        $data['orders'] = Order::where('company_id', $companyId)->orderBy('id', 'desc')->get();

        return view('orders.list', $data);
    }
}
