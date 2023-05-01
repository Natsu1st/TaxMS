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
        Schema::table('user_profiles', function (Blueprint $table) {
            $table->string('first_name',50)->nullable();
            $table->string('last_name',50)->nullable();
            $table->string('dob',50)->nullable();
            $table->string('gender',50)->nullable();
            $table->string('nationality',50)->nullable();
            $table->string('status',50)->nullable();
            $table->string('grandfather_name',50)->nullable();
            $table->string('father_name',50)->nullable();
            $table->string('mother_name',50)->nullable();
            $table->string('spouse_name',50)->nullable();
            $table->string('citizenship_numer',50)->nullable();
            $table->string('citizenship_issue_date',50)->nullable();
            $table->string('citizenship_documents',191);
            $table->string('country',50)->nullable();
            $table->string('province',50)->nullable();
            $table->string('district',50)->nullable();
            $table->string('municipality',50)->nullable();
            $table->integer('ward')->nullable();
            $table->string('tole',50)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('user_profiles', function (Blueprint $table) {
            //
        });
    }
};
