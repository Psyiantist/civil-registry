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
        // First, ensure all usernames are unique and not empty
        $employees = DB::table('employees')->get();
        foreach ($employees as $employee) {
            if (empty($employee->username)) {
                // Generate a unique username if empty
                $newUsername = 'user_' . time() . '_' . rand(1000, 9999);
                DB::table('employees')
                    ->where('id', $employee->id)
                    ->update(['username' => $newUsername]);
            }
        }

        // Now add the email column
        Schema::table('employees', function (Blueprint $table) {
            if (!Schema::hasColumn('employees', 'email')) {
                $table->string('email')->nullable()->after('username');
            }
        });

        // Copy username to email for existing records
        DB::table('employees')->whereNull('email')->update(['email' => DB::raw('username')]);

        // Now make email unique and not nullable
        Schema::table('employees', function (Blueprint $table) {
            $table->string('email')->unique()->nullable(false)->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('employees', function (Blueprint $table) {
            if (Schema::hasColumn('employees', 'email')) {
                $table->dropColumn('email');
            }
        });
    }
}; 