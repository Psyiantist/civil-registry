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
            if (Schema::hasColumn('employees', 'employee_id')) {
                $table->dropColumn('employee_id');
            }
            if (!Schema::hasColumn('employees', 'id_card_image')) {
                $table->string('id_card_image')->nullable();
            }
            if (!Schema::hasColumn('employees', 'birthday')) {
                $table->date('birthday')->nullable();
            }
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('employees', function (Blueprint $table) {
            $table->string('employee_id')->unique()->nullable();
            $table->dropColumn('id_card_image');
            $table->dropColumn('birthday');
        });
    }
}; 