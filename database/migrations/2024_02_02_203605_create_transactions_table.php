<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->string('customer_id')->default('');
            $table->string('type')->default('');
            $table->string('amount')->default('');
            $table->string('currency')->default('');
            $table->string('transaction_id')->default('');
            $table->string('reference')->default('');
            $table->string('status')->default('');
            $table->string('description')->default('');
            $table->string('remark')->default('');
            $table->timestamps();
        });
    }


};
