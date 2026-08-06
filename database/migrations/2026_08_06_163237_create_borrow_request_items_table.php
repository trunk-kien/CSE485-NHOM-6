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
        Schema::create('borrow_request_items', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('borrow_request_id');
            $table->unsignedBigInteger('equipment_id');
            $table->integer('quantity');
            $table->timestamps();

            $table->foreign('borrow_request_id')->references('id')->on('borrow_requests')->onDelete('cascade');
            $table->foreign('equipment_id')->references('id')->on('equipment')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('borrow_request_items');
    }
};
