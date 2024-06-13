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
            $table->foreignId('platinum_id')->constrained('platinums');
            $table->string('expert_name');
            $table->string('domain_name');
            $table->string('expert_university');
            $table->string('expert_email');
            $table->string('expert_phone_number');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('experts', function (Blueprint $table) {
            $table->dropForeign('experts_platinum_id_foreign');
            $table->dropColumn('expert_id');
        });

        Schema::dropIfExists('experts');
    }
};
