<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Balance extends Model
{
    use HasFactory;

    protected $table = 'balance';

    protected $fillable = [
        'fname',
        'lname',
        'address',
        'dob',
        'acc_number',
        'acc_number',
        'email',
    ];
}
