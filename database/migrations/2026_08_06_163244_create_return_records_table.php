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
        Schema::create('return_records', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('borrow_request_id')->unique();
            $table->unsignedBigInteger('receiver_id'); 
            $table->dateTime('actual_return_date');
            $table->timestamps();

            $table->foreign('borrow_request_id')->references('id')->on('borrow_requests')->onDelete('cascade');
            $table->foreign('receiver_id')->references('id')->on('users')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('return_records');
    }
};
