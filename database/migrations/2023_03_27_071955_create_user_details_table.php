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
        Schema::create('user_details', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->string('employee_id');
            $table->foreignId('department_id');
            $table->foreignId('designation_id');
            $table->foreignId('office_shift_id');
            $table->decimal('basic_salary', 65, 2);
            $table->decimal('hourly_rate', 65, 2);
            $table->foreignId('salary_type');
            $table->mediumText('role_description')->nullable();
            $table->string('date_of_joining')->nullable();
            $table->string('date_of_leaving')->nullable();
            $table->string('date_of_birth')->nullable();
            $table->foreignId('marital_status')->nullable();
            $table->foreignId('religion_id')->nullable();
            $table->string('blood_group')->nullable();
            $table->foreignId('citizenship_id')->nullable();
            $table->mediumText('bio')->nullable();
            $table->unsignedBigInteger('experience')->nullable();
            $table->mediumText('fb_profile')->nullable();
            $table->mediumText('twitter_profile')->nullable();
            $table->mediumText('gplus_profile')->nullable();
            $table->mediumText('linkedin_profile')->nullable();
            $table->string('account_title')->nullable();
            $table->string('account_number')->nullable();
            $table->string('bank_name')->nullable();
            $table->string('iban')->nullable();
            $table->string('swift_code')->nullable();
            $table->mediumText('bank_branch')->nullable();
            $table->string('contact_full_name')->nullable();
            $table->string('contact_phone_no')->nullable();
            $table->string('contact_email')->nullable();
            $table->mediumText('contact_address')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_details');
    }
};
