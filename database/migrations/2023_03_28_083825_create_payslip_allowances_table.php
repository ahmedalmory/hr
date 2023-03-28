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
        Schema::create('payslip_allowances', function (Blueprint $table) {
            $table->id();
            $table->foreignId('payslip_id');
            $table->foreignId('staff_id');
            $table->boolean('is_taxable');
            $table->boolean('is_fixed');
            $table->string('pay_title', 200);
            $table->decimal('pay_amount', 65, 2)->default(0.00);
            $table->string('salary_month', 200);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payslip_allowances');
    }
};
