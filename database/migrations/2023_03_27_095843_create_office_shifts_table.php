<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class () extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('office_shifts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('company_id')->comment('user id');
            $table->string('shift_name');
            $table->string('monday_in_time')->default('');
            $table->string('monday_out_time')->default('');
            $table->string('tuesday_in_time')->default('');
            $table->string('tuesday_out_time')->default('');
            $table->string('wednesday_in_time')->default('');
            $table->string('wednesday_out_time')->default('');
            $table->string('thursday_in_time')->default('');
            $table->string('thursday_out_time')->default('');
            $table->string('friday_in_time')->default('');
            $table->string('friday_out_time')->default('');
            $table->string('saturday_in_time')->default('');
            $table->string('saturday_out_time')->default('');
            $table->string('sunday_in_time')->default('');
            $table->string('sunday_out_time')->default('');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('office_shifts');
    }
};
