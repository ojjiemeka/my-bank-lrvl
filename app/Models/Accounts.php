<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Accounts extends Model
{
    use HasFactory;

    protected $table = 'accounts';

    protected $fillable = [
        'fname',
        'lname',
        'address',
        'dob',
        'phonenumber',
        'acc_number',
        'email',
    ];
}
