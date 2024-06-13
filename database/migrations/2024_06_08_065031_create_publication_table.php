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
        Schema::create('publication', function (Blueprint $table) {
            $table->id('publication_id');
            $table->string('publication_title');
            $table->string('publication_author');
            $table->string('publication_type');
            $table->date('publication_date');
            $table->string('publication_domain');
            $table->string('publication_fileName');
            $table->string('publication_filePath');
            $table->foreignId('platinum_id')->nullable()->constrained()->cascadeOnDelete();
            $table->foreignId('expert_id')->nullable()->constrained()->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('publication');
    }
};

