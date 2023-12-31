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

    public function user()
    {
        return $this->belongsTo(User::class, 'email', 'email');
    }

    public function balance()
    {
        return $this->hasOne(Balance::class, 'acc_id', 'id');
    }
}
