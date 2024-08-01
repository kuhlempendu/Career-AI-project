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

        Schema::create('academic_information', function (Blueprint $table) {
            $table->unsignedInteger('StudentID');
            $table->string('CurrentDegreeProgram')->nullable();
            $table->string('YearOfStudy', 50)->nullable();
            $table->date('ExpectedGraduationDate')->nullable();
            $table->decimal('OverallGPA', 3, 2)->nullable();
            $table->decimal('MajorGPA', 3, 2)->nullable();
            $table->text('CompletedCourses')->nullable();
            $table->text('CurrentCourses')->nullable();
            $table->text('FavoriteSubjects')->nullable();
            $table->text('LeastFavoriteSubjects')->nullable();
            $table->text('TechnicalSkills')->nullable();
            $table->text('SoftSkills')->nullable();
            $table->text('Certifications')->nullable();
            $table->text('Projects')->nullable();
            $table->text('Internships')->nullable();
            $table->text('ClubsAndOrganizations')->nullable();
            $table->text('VolunteerExperience')->nullable();
            $table->text('FeedbackOnCurriculum')->nullable();
            $table->timestamps();

            $table->foreign('StudentID')->references('StudentID')->on('personal_information')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('academic_information');
    }
};
