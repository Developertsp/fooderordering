<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderDetail;
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

    public function detail($id)
    {
        $orderId = base64_decode($id);
        $data['orderDetails'] = Order::with('details')->find($orderId);
    // return $data;
        return view('orders.detail', $data);
    }
}
