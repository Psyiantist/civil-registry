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
        // First, drop the existing status column
        Schema::table('employees', function (Blueprint $table) {
            $table->dropColumn('status');
        });

        // Then create it as an enum with all three values
        Schema::table('employees', function (Blueprint $table) {
            $table->enum('status', ['pending', 'approved', 'declined'])->default('pending')->after('id_card_image');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('employees', function (Blueprint $table) {
            $table->dropColumn('status');
        });

        Schema::table('employees', function (Blueprint $table) {
            $table->enum('status', ['approved', 'declined'])->default('declined')->after('id_card_image');
        });
    }
}; 