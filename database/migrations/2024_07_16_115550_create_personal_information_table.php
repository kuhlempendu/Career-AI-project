<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('personal_information', function (Blueprint $table) {
            $table->increments('StudentID');
            $table->string('FullName');
            $table->date('DateOfBirth');
            $table->integer('Age')->nullable();
            $table->string('Gender', 50)->nullable();
            $table->string('Nationality', 100)->nullable();
            $table->string('Email')->unique();
            $table->string('PhoneNumber', 50)->nullable();
            $table->text('Address')->nullable();
            $table->text('LanguagesSpoken')->nullable();
            $table->text('PersonalityTraits')->nullable();
            $table->text('LearningStyle', 100)->nullable();
            $table->text('HobbiesAndInterests')->nullable();
            $table->timestamps();
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('personal_information');
    }
};
