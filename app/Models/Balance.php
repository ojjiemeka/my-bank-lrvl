<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Balance extends Model
{
    use HasFactory;

    protected $table = 'balance';

    protected $fillable = [
        'acc_id',
        'wallet_balance',
        'main_balance',
        'card_1',
        'card_2',
        'card_3',
        'card_4'
    ];
}
