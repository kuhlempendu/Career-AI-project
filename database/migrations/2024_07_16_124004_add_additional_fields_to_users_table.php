<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddAdditionalFieldsToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->date('date_of_birth')->nullable();
            $table->string('gender', 50)->nullable();
            $table->string('nationality', 100)->nullable();
            $table->string('phone_number', 50)->nullable();
            $table->text('address')->nullable();
            $table->json('languages_spoken')->nullable();
            $table->json('personality_traits')->nullable();
            $table->string('learning_style', 100)->nullable();
            $table->json('hobbies_and_interests')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn([
                'date_of_birth', 'gender', 'nationality', 'phone_number', 'address',
                'languages_spoken', 'personality_traits', 'learning_style', 'hobbies_and_interests'
            ]);
        });
    }
}
