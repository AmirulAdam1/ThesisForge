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
        Schema::create('platinums', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();
            $table->foreignId('staff_id')->constrained('staffs');
            $table->string('title');
            $table->string('identity_card');
            $table->string('gender');
            $table->string('religion');
            $table->string('race');
            $table->string('citizenship');
            $table->string('address');
            $table->string('city');
            $table->string('state');
            $table->string('postcode');
            $table->string('country');
            $table->string('facebook_name');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {   
        Schema::table('platinums', function (Blueprint $table) {
            $table->dropForeign('platinums_user_id_foreign');
            $table->dropForeign('platinums_staff_id_foreign');
            $table->dropColumn('user_id');
            $table->dropColumn('staff_id');
        });

        Schema::dropIfExists('platinums');
    }
};
