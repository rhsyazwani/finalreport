<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Membership extends Model
{
    // Explicitly specify the table name
    protected $table = 'members';

    // Fillable attributes
    protected $fillable = [
        'member_id',
        'name',
        'phone_no',
        'email',
        'date_joined',
        'role',
        'membership_status',
    ];
}
