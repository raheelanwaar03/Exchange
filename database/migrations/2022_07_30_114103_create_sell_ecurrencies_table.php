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
        Schema::create('sell_ecurrencies', function (Blueprint $table) {
            $table->id();
            $table->string('user_id');
            $table->string('transaction_id',6)->unique();
            $table->string('status')->default('pending');
            $table->integer('sellingAmount');
            $table->string('e_bank');
            $table->string('bank_name');
            $table->string('e_bank_details');
            $table->string('account_number');
            $table->string('account_name');
            $table->string('seller_email');
            $table->string('totalBuyingPrice');
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
        Schema::dropIfExists('sell_ecurrencies');
    }
};
