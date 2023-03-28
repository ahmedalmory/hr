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
        Schema::create('payslips', function (Blueprint $table) {
            $table->id();
            $table->string('payslip_key', 200);
            $table->integer('company_id')->comment('user id');
            $table->integer('staff_id')->comment('user id');
            $table->string('salary_month', 200);
            $table->integer('wages_type');
            $table->string('payslip_type', 50);
            $table->decimal('basic_salary', 65, 2)->default(0.00);
            $table->decimal('daily_wages', 65, 2)->default(0.00);
            $table->string('hours_worked', 50)->default('0');
            $table->decimal('total_allowances', 65, 2)->default(0.00);
            $table->decimal('total_commissions', 65, 2)->default(0.00);
            $table->decimal('total_statutory_deductions', 65, 2)->default(0.00);
            $table->decimal('total_other_payments', 65, 2)->default(0.00);
            $table->decimal('net_salary', 65, 2)->default(0.00);
            $table->integer('payment_method');
            $table->mediumText('pay_comments');
            $table->boolean('is_payment');
            $table->string('year_to_date', 200);
            $table->boolean('is_advance_salary_deduct');
            $table->decimal('advance_salary_amount', 65, 2)->nullable();
            $table->boolean('is_loan_deduct');
            $table->decimal('loan_amount', 65, 2)->nullable();
            $table->boolean('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payslips');
    }
};
