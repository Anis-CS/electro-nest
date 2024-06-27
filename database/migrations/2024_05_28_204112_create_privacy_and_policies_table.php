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
        Schema::create('privacy_and_policies', function (Blueprint $table) {
            $table->id();
            $table->string('one_name');
            $table->longText('one_description');
            $table->string('two_name')->nullable();
            $table->longText('two_description')->nullable();
            $table->string('three_name')->nullable();
            $table->longText('three_description')->nullable();
            $table->string('four_name')->nullable();
            $table->longText('four_description')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('privacy_and_policies');
    }
};
