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
        Schema::create('timesheet_requests', function (Blueprint $table) {
            $table->id();
            $table->foreignId('company_id')->comment('user id');
            $table->foreignId('staff_id')->comment('user id');
            $table->string('request_date');
            $table->string('request_month');
            $table->string('clock_in');
            $table->string('clock_out');
            $table->string('total_hours');
            $table->mediumText('request_reason');
            $table->boolean('is_approved')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('timesheet_requests');
    }
};
