<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Appointment;
use App\Models\Contact;

class AdminController extends Controller
{
    public function index()
    {
        // 🔢 Dashboard counts
        $usersCount = User::count();
        $doctorsCount = 5; // Replace with actual doctor count if available
        $appointmentsCount = Appointment::count();
        $pendingCount = Appointment::where('status', 'pending')->count();

        // 📅 Latest appointments
        $appointments = Appointment::latest()->take(5)->get();

        // 💬 Latest contact messages
        $contacts = Contact::latest()->take(10)->get();

        // 📊 Chart data (fixed)
        $chartData = Appointment::selectRaw('DATE(created_at) as date, COUNT(*) as count')
            ->groupByRaw('DATE(created_at)')
            ->orderBy('date', 'asc')
            ->pluck('count', 'date');

        $chartLabels = $chartData->keys();
        $chartValues = $chartData->values();

        // 📤 Send all to view
        return view('admin', compact(
            'usersCount',
            'doctorsCount',
            'appointmentsCount',
            'pendingCount',
            'appointments',
            'contacts',
            'chartLabels',
            'chartValues'
        ));
    }

    // 🗑 Delete a contact message
    public function deleteMessage($id)
    {
        Contact::findOrFail($id)->delete();
        return back()->with('success', 'Message deleted successfully.');
    }
}