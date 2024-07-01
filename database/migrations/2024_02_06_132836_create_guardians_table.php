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
        Schema::create('guardians', function (Blueprint $table) {
            $table->id();
            $table->string('name')->index();
            $table->string('email');
            $table->string('nationality');
            $table->string('Job');
            $table->string('state');
            $table->string('age');
            $table->string('address');
            $table->string('Phone_Number');
            $table->string('Phone_Number_2')->nullable();
            $table->string('date_of_birth');
            $table->string('gender');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('guardians');
    }
};
