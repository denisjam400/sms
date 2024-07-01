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
        Schema::create('instructors', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->string('nationality');
            $table->string('state');
            $table->string('age');
            $table->string('address');
            $table->string('Phone_Number');
            $table->string('Phone_Number_2')->nullable();
            $table->string('date_of_birth');
            $table->string('role_in_company');
            $table->string('gender');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('instructors');
    }
};
