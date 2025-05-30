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
        Schema::create('appointments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->enum('appointment_type', [
                'Releasing of document',
                'Document Correction',
                'Document Consultation',
                'Legitimation',
                'Late Registration of Document',
                'Requirement Submission'
            ]);
            $table->string('document_type');
            $table->date('appointment_date');
            $table->time('appointment_time');
            $table->enum('status', ['Pending', 'Approved', 'Declined', 'Cancelled', 'Completed'])->default('Pending');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('appointments');
    }
}; 