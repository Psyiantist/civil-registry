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
        Schema::table('appointments', function (Blueprint $table) {
            $table->string('requester_name')->nullable()->after('user_id');
            $table->string('document_owner_name')->nullable()->after('requester_name');
            $table->string('relationship')->nullable()->after('document_owner_name');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('appointments', function (Blueprint $table) {
            $table->dropColumn(['requester_name', 'document_owner_name', 'relationship']);
        });
    }
};
