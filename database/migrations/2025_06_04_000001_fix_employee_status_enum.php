<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // First convert to string to remove any existing constraints
        Schema::table('employees', function (Blueprint $table) {
            $table->string('status')->nullable()->change();
        });

        // Update any NULL values to 'pending'
        DB::table('employees')
            ->whereNull('status')
            ->update(['status' => 'pending']);

        // Now add the check constraint using PostgreSQL syntax
        DB::statement("ALTER TABLE employees ADD CONSTRAINT employees_status_check CHECK (status IN ('pending', 'approved', 'declined'))");
        
        // Set the default and not null constraints
        Schema::table('employees', function (Blueprint $table) {
            $table->string('status')->default('pending')->nullable(false)->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Remove the check constraint
        DB::statement('ALTER TABLE employees DROP CONSTRAINT IF EXISTS employees_status_check');

        // Convert back to original state
        Schema::table('employees', function (Blueprint $table) {
            $table->string('status')->nullable()->change();
        });
    }
}; 