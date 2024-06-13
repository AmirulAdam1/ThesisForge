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
        Schema::create('memberships', function (Blueprint $table) {
            $table->id();
            $table->foreignId('platinum_id')->constrained()->cascadeOnDelete();
            $table->string('registration_type');
            $table->string('program_interested');
            $table->string('program_batch');
            $table->string('referral_exist')->default('no');
            $table->string('referral_name')->nullable();
            $table->string('referral_batch')->nullable();
            $table->boolean('consent');
            $table->date('application_date');
            $table->string('transaction_proof')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('memberships', function (Blueprint $table) {
            $table->dropForeign('memberships_platinum_id_foreign');
            $table->dropColumn('platinum_id');
        });

        Schema::dropIfExists('memberships');
    }
};
