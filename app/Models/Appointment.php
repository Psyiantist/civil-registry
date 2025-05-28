<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'reference_number',
        'appointment_type',
        'document_type',
        'appointment_date',
        'appointment_time',
        'status',
        'cancellation_reason'
    ];

    protected $casts = [
        'appointment_date' => 'date',
    ];

    // Relationship with User
    public function user()
    {
        return $this->belongsTo(User::class);
    }
} 