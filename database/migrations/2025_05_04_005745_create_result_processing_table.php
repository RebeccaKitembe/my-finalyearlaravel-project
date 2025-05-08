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
        Schema::create('result_processing', function (Blueprint $table) {
            $table->id();
            $table->foreignId('school_id')->constrained()->onDelete('cascade');
            $table->foreignId('class_id')->constrained()->onDelete('cascade');
            $table->decimal('average_marks', 5, 2);
            $table->decimal('highest_marks', 5, 2);
            $table->foreignId('best_student_id')->constrained('students')->onDelete('cascade');
            $table->foreignId('best_teacher_id')->constrained('users')->onDelete('cascade');
            $table->foreignId('best_subject_id')->constrained('subjects')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('result_processing');
    }
};
