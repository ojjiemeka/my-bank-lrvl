<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('balance', function (Blueprint $table) {
            $table->id();
            $table->integer('acc_id');
            $table->string('wallet_balance');
            $table->string('main_balance');
            $table->string('card_1');
            $table->string('card_2');
            $table->string('card_3');
            $table->string('card_4');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
