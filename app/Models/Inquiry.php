<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inquiry extends Model
{
    use HasFactory;

    // Define the table name explicitly if needed
    protected $table = 'inquiries';

    // Specify the fillable attributes
    protected $fillable = ['name', 'email', 'message'];
}
