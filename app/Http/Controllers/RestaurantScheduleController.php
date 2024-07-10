<?php

namespace App\Http\Controllers;

use App\Models\RestaurantSchedule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RestaurantScheduleController extends Controller
{
    public function index()
    {
        
    }

    public function create()
    {
        $data['schedules'] = RestaurantSchedule::where('company_id', Auth::user()->company_id)->get()->keyBy('day')->toArray();
        return view('schedules.create', $data);
    }

    public function store(Request $request)
    {
        $days = ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'];

        $company_id = Auth::user()->company_id;

        foreach ($days as $day) {
            $opening_time = $request->input(strtolower($day) . '_opening_time');
            $closing_time = $request->input(strtolower($day) . '_closing_time');
            $is_closed = $request->has(strtolower($day) . '_is_closed');

            RestaurantSchedule::updateOrCreate(
                ['day' => $day, 'company_id' => $company_id],
                [
                    'company_id' => $company_id,
                    'opening_time' => $opening_time,
                    'closing_time' => $closing_time,
                    'is_closed' => $is_closed,
                    'created_by' => Auth::user()->id,
                ]
            );
        }

        return redirect()->back()->with('success', 'Schedule updated successfully.');

        // return redirect()->route('users.list')->with('success', 'User created successfully');
    }
}
