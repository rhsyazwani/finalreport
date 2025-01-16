<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourtBooking extends Model
{
    use HasFactory;

    protected $primaryKey = 'booking_id';
    public $incrementing = false; // Add this if booking_id is not auto-incrementing
    protected $keyType = 'string'; // Add this if booking_id is a string

    protected $fillable = [
        'booking_id',
        'member_id',
        'court_no',
        'booking_date',
        'booking_time_start',
        'booking_time_end',
        'total_hours',
        'status',
    ];
}
