<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCreditsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('credits', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->integer('sequence')->unique();
            $table->string('installment_date')->nullable();
            $table->string('customer_id');
            $table->string('customer_phone')->nullable();
            $table->string('customer_no')->nullable();
            $table->string('status');
            $table->string('transaction_date');
            $table->string('credit_database_number')->nullable();
            $table->string('credit_item');
            $table->string('invoice');
            $table->string('administration');
            $table->string('bonds_value');
            $table->string('selling_price');
            $table->string('down_payment');
            $table->string('installment');
            $table->string('total_installment');
            $table->string('remaining_installment')->nullable();
            $table->string('debt_profit')->nullable();
            $table->string('running_revenue')->nullable();
            $table->string('return_estimation')->nullable();
            $table->integer('tenor');
            $table->string('selected_commodity');
            $table->integer('selected_commodity_price');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('credits');
    }
}
