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
        Schema::create('experts', function (Blueprint $table) {
            $table->id();
            $table->string('expert_name');
            $table->string('expert_domain');
            $table->string('expert_university');
            $table->string('expert_email');
            $table->string('expert_phone_number');

            $table->foreignId('platinum_id')->constrained()->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('experts');
    }
};
