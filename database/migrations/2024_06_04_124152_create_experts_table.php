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
            $table->id('expert_id'); 
            $table->string('expert_name');
            $table->string('expert_domain');
            $table->string('expert_university');
            $table->string('expert_email')->unique(); 
            $table->string('expert_phone_number')->unique(); 
            $table->string('domain_name');
            $table->timestamps();
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
