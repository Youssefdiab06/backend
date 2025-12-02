<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'phone',
        'doctor_id',     // link to doctors table
        'schedule_id',   // link to doctor_schedules table
        'message',
        'status',
    ];

    // Relationship to Doctor
    public function doctor()
    {
        return $this->belongsTo(Doctor::class);
    }

    // Relationship to DoctorSchedule
    public function schedule()
    {
        return $this->belongsTo(DoctorSchedule::class, 'schedule_id');
    }
}