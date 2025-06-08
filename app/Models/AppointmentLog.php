<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AppointmentLog extends Model
{
    protected $fillable = [
        'appointment_id',
        'employee_id',
        'action',
        'old_status',
        'new_status',
        'details'
    ];

    protected $casts = [
        'details' => 'array'
    ];

    public function appointment()
    {
        return $this->belongsTo(Appointment::class);
    }

    public function employee()
    {
        return $this->belongsTo(Employee::class);
    }
} 