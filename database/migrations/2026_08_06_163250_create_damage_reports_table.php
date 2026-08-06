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
        Schema::create('damage_reports', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('return_record_id');
            $table->unsignedBigInteger('equipment_id');
            $table->integer('damage_quantity');
            $table->text('description')->nullable();
            $table->timestamps();

            $table->foreign('return_record_id')->references('id')->on('return_records')->onDelete('cascade');
            $table->foreign('equipment_id')->references('id')->on('equipment')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('damage_reports');
    }
};
