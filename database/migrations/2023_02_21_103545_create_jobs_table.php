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
        Schema::create('jobs', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug');
            $table->string('mini_description');
            $table->text('description');
            $table->string('image')->nullable();
            $table->string('employeur')->nullable();
            $table->boolean('publish_at')->default('0');
            $table->unsignedBigInteger('family_id');
            $table->unsignedBigInteger('lieu_id');
            $table->unsignedBigInteger('contrat_id');
            $table->string('numero')->unique();
            $table->foreign('family_id')->references('id')->on('families')->onDelete('CASCADE')->onUpdate('CASCADE');
            $table->foreign('lieu_id')->references('id')->on('lieus')->onDelete('CASCADE')->onUpdate('CASCADE');
            $table->foreign('contrat_id')->references('id')->on('contrats')->onDelete('CASCADE')->onUpdate('CASCADE');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jobs');
    }
};
