<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Stripe\Stripe;
use Stripe\PaymentIntent;
use App\Models\Transaction;
use App\Models\Order;
use App\Models\OrderDetail;

class PaymentController extends Controller
{
    public function charge(Request $request)
    {
        \Log::info('Charge Request Data: ', $request->all());
    
        Stripe::setApiKey('');
    
        try {
            $validatedData = $request->validate([
                'name' => 'required|string',
                'phone' => 'required|string',
                'email' => 'nullable|string|email',
                'address' => 'nullable|string',
                'cartItems' => 'required|array',
                'cartTotal' => 'required|numeric',
                'orderType' => 'required|string',
                'paymentOption' => 'required|in:cash,online', // Validate paymentOption
                'paymentMethodId' => 'required_if:paymentOption,online|string', // Validate paymentMethodId
            ]);
    
            $amount = $validatedData['cartTotal'] * 100;
    
            $paymentIntent = null;
            if ($validatedData['paymentOption'] === 'online') {
                $paymentIntent = PaymentIntent::create([
                    'amount' => $amount,
                    'currency' => 'usd',
                    'payment_method' => $validatedData['paymentMethodId'],
                    'confirm' => true,
                    'automatic_payment_methods' => [
                        'enabled' => true,
                        'allow_redirects' => 'never' 
                    ],
                ]);
            }
    
            \Log::info('Saving Transaction: ', [
                'stripe_payment_intent_id' => $paymentIntent ? $paymentIntent->id : null,
                'amount' => $validatedData['cartTotal'],
                'currency' => 'usd',
                'status' => $paymentIntent ? $paymentIntent->status : 'no_payment',
            ]);
    
            // Store transaction
            Transaction::create([
                'stripe_payment_intent_id' => $paymentIntent ? $paymentIntent->id : null,
                'amount' => $validatedData['cartTotal'],
                'currency' => 'usd',
                'status' => $paymentIntent ? $paymentIntent->status : 'no_payment',
            ]);
    
            \Log::info('Order Created: ', [
                'company_id' => 1,
                'name' => $validatedData['name'],
                'email' => $validatedData['email'],
                'phone' => $validatedData['phone'],
                'address' => $validatedData['address'],
                'total' => $validatedData['cartTotal'],
                'order_type' => $validatedData['orderType'],
            ]);
    
            // Store order
            $order = new Order();
            $order->company_id = 1; // Adjust accordingly
            $order->name = $validatedData['name'];
            $order->email = $validatedData['email'];
            $order->phone = $validatedData['phone'];
            $order->address = $validatedData['address'];
            $order->total = $validatedData['cartTotal'];
            $order->order_type = $validatedData['orderType'];
            $order->payment_option = $validatedData['paymentOption'];
            $order->save();
            $orderId = $order->id;
    
            \Log::info('Order ID: ', ['order_id' => $order->id]);
    
            foreach ($validatedData['cartItems'] as $item) {
                \Log::info('Saving OrderDetail: ', [
                    'order_id' => $order->id,
                    'product_id' => $item['productId'],
                    'product_title' => $item['productTitle'],
                    'product_price' => $item['productPrice'],
                    'quantity' => $item['quantity'],
                    'sub_total' => $item['rowTotal'],
                    'options' => implode(',', $item['optionNames']),
                ]);
                $orderDetail = new OrderDetail();
                $orderDetail->order_id = $orderId;
                $orderDetail->product_id = $item['productId'];
                $orderDetail->product_title = $item['productTitle'];
                $orderDetail->product_price = $item['productPrice'];
                $orderDetail->quantity = $item['quantity'];
                $orderDetail->sub_total = $item['rowTotal'];
                $orderDetail->options = implode(',', $item['optionNames']);
                $orderDetail->save();
            }
    
            return response()->json([
                'status' => 'success',
                'message' => 'Order Placed Successfully',
                'orderId' => $orderId,
                'clientSecret' => $paymentIntent ? $paymentIntent->client_secret : null
            ], 200);
    
        } catch (\Exception $e) {
            \Log::error('Payment error: ', ['error' => $e->getMessage()]);
            return response()->json(['success' => false, 'error' => 'Payment failed. Please try again.'], 500);
        }
    }
    
    }