<?php

use Hyperf\Database\Schema\Schema;
use Hyperf\Database\Schema\Blueprint;
use Hyperf\Database\Migrations\Migration;

class Companies extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('company', function (Blueprint $table) {
            // Inserir o User id como FK
            $table->uuid('id')->primary()->unique();
            $table->string('fantasy_name');
            $table->string('legal_name')->unique();
            $table->string('document')->unique();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('company', function (Blueprint $table) {
            $table->drop();
        });
    }
}
