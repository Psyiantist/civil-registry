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
            // Make appointment_id nullable
            $table->unsignedBigInteger('appointment_id')->nullable()->change();
            
            // Drop the existing foreign key
            $table->dropForeign(['appointment_id']);
            
            // Add the new foreign key without cascade delete
            $table->foreign('appointment_id')
                  ->references('id')
                  ->on('appointments')
                  ->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('appointment_logs', function (Blueprint $table) {
            // Drop the modified foreign key
            $table->dropForeign(['appointment_id']);
            
            // Make appointment_id not nullable again
            $table->unsignedBigInteger('appointment_id')->nullable(false)->change();
            
            // Restore the original foreign key with cascade delete
            $table->foreign('appointment_id')
                  ->references('id')
                  ->on('appointments')
                  ->onDelete('cascade');
        });
    }
};
