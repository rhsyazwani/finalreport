<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FriendlySes extends Model
{
    protected $table = 'friendly_ses'; // Explicit table name
    protected $fillable = [
        'session_ID', 'court_no', 'category', 'date', 'time', 'team_one', 'team_two',
    ];
}
