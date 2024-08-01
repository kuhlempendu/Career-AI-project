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
        Schema::create('career_preferences', function (Blueprint $table) {
            $table->unsignedInteger('StudentID');
            $table->text('PreferredITSpecializations')->nullable();
            $table->text('CareerGoals')->nullable();
            $table->text('ShortTermGoals')->nullable();
            $table->text('LongTermGoals')->nullable();
            $table->text('PreferredIndustries')->nullable();
            $table->text('PreferredJobRoles')->nullable();
            $table->boolean('WillingnessToRelocate')->nullable();
            $table->text('PreferredWorkEnvironment')->nullable();
            $table->string('WorkLifeBalancePreference', 255)->nullable();
            $table->string('PreferredMethodOfRecommendations', 255)->nullable();
            $table->text('AdditionalComments')->nullable();
            $table->timestamps();

            $table->foreign('StudentID')->references('StudentID')->on('personal_information')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('career_preferences');
    }
};
