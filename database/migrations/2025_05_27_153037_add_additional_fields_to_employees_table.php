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
        Schema::table('employees', function (Blueprint $table) {
            if (!Schema::hasColumn('employees', 'birthday')) {
                $table->date('birthday')->nullable();
            }
            if (!Schema::hasColumn('employees', 'address')) {
                $table->text('address')->nullable();
            }
            if (!Schema::hasColumn('employees', 'employee_id')) {
                $table->string('employee_id')->unique()->nullable();
            }
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('employees', function (Blueprint $table) {
            $table->dropColumn(['birthday', 'address', 'employee_id']);
        });
    }
};
