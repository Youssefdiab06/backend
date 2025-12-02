<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doctor;

class ServiceController extends Controller
{
    public function index()
    {
        $doctors = Doctor::all();
        return view('services', compact('doctors'));
    }
}