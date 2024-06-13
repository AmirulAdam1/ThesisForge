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
        Schema::create('educations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('platinum_id')->constrained()->cascadeOnDelete();
            $table->string('current_level');
            $table->string('field');
            $table->string('institute');
            $table->string('occupation');
            $table->string('study_sponsorship');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('educations', function (Blueprint $table) {
            $table->dropForeign('educations_platinum_id_foreign');
            $table->dropColumn('platinum_id');
        });

        Schema::dropIfExists('educations');
    }
};
