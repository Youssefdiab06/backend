<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            "name" => "required",
            "email" => "required|email",
            "phone" => "nullable",
            "doctor_id" => "required",
            "schedule_id" => "required",
            "message" => "nullable"
        ]);

        Appointment::create($validated);

        return response()->json(["success" => true]);
    }
}