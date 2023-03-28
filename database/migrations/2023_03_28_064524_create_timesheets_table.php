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
        Schema::create('timesheets', function (Blueprint $table) {
            $table->id();
            $table->foreignId('company_id')->comment('user id');
            $table->foreignId('employee_id')->comment('user id');
            $table->string('attendance_date');
            $table->string('clock_in');
            $table->string('clock_in_ip_address');
            $table->string('clock_out');
            $table->string('clock_out_ip_address');
            $table->string('clock_in_out');
            $table->string('clock_in_latitude');
            $table->string('clock_in_longitude');
            $table->string('clock_out_latitude');
            $table->string('clock_out_longitude');
            $table->string('time_late');
            $table->string('early_leaving');
            $table->string('overtime');
            $table->string('total_work');
            $table->string('total_rest');
            $table->string('attendance_status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('timesheets');
    }
};
