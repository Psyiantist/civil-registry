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
        Schema::table('appointment_logs', function (Blueprint $table) {
            // Drop the existing foreign key
            $table->dropForeign(['employee_id']);
            
            // Add the new foreign key referencing employees table
            $table->foreign('employee_id')
                  ->references('id')
                  ->on('employees')
                  ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('appointment_logs', function (Blueprint $table) {
            // Drop the employees foreign key
            $table->dropForeign(['employee_id']);
            
            // Restore the original users foreign key
            $table->foreign('employee_id')
                  ->references('id')
                  ->on('users')
                  ->onDelete('cascade');
        });
    }
};
