<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('buy_ecurrencies', function (Blueprint $table) {
            $table->id();
            $table->string('user_id');
            $table->string('transaction_id',6)->unique();
            $table->string('status')->default('pending');
            $table->integer('buyingAmount');
            $table->string('e_bank');
            $table->string('account_number');
            $table->string('account_name');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('buy_ecurrencies');
    }
};
