<?php

use Hyperf\Database\Schema\Schema;
use Hyperf\Database\Schema\Blueprint;
use Hyperf\Database\Migrations\Migration;

class Expenditures extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('expenditure', function (Blueprint $table) {
            // Inserir o User id como FK
            // Inserir o company id como FK
            $table->uuid('id')->primary()->unique();
            $table->string('description');
            $table->integer('value');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('expenditure', function (Blueprint $table) {
            $table->drop();
        });
    }
}
