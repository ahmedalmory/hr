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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->foreignId('role_id')->nullable();
            $table->string('type', 50)->nullable();
            $table->foreignId('company_id')->comment('user id')->nullable();
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('username')->nullable();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password')->nullable();
            $table->string('company_name')->nullable();
            $table->string('trading_name')->nullable();
            $table->string('registration_no')->nullable();
            $table->string('government_tax')->nullable();
            $table->foreignId('company_type_id')->nullable();
            $table->string('profile_photo')->nullable();
            $table->string('contact_number')->nullable();
            $table->string('gender', 20)->nullable();
            $table->text('address_1')->nullable();
            $table->text('address_2')->nullable();
            $table->string('city')->nullable();
            $table->string('state')->nullable();
            $table->string('zipcode')->nullable();
            $table->foreignId('country_id')->nullable();
            $table->timestamp('last_login')->nullable();
            $table->timestamp('last_logout')->nullable();
            $table->string('last_login_ip')->nullable();
            $table->boolean('is_logged_in')->nullable();
            $table->boolean('is_active')->default(1);
            $table->text('permissions')->nullable();
            $table->foreignId('employee_id')->nullable();
            $table->foreignId('department_id')->nullable();
            $table->foreignId('designation_id')->nullable();
            $table->foreignId('office_shift_id')->nullable();
            $table->decimal('basic_salary', 65, 2)->nullable();
            $table->decimal('hourly_rate', 65, 2)->nullable();
            $table->foreignId('salary_type')->nullable();
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
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
