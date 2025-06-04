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
        // First, convert the column to string to remove the enum constraint
        Schema::table('employees', function (Blueprint $table) {
            $table->string('status')->change();
        });

        // Then create a new enum with all three values
        Schema::table('employees', function (Blueprint $table) {
            $table->enum('status', ['pending', 'approved', 'declined'])->default('pending')->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('employees', function (Blueprint $table) {
            $table->enum('status', ['approved', 'declined'])->default('declined')->change();
        });
    }
}; 