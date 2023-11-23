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
        //creating tables in the database
        Schema::create('relocations', function (Blueprint $table) {
            $table->id();
            $table->string('addressfrom');
            $table->string('addressto');
            $table->string('appartment_from')->default('appartment');
            $table->string('appartment_to')->default('appartment');
            $table->string('bedroom_from')->nullable();
            $table->string('bedroom_to')->nullable();
            $table->string('floor_from')->nullable();
            $table->string('floor_to')->nullable();
            $table->string('Mfirst_name');
            $table->string('Mlast_name');
            $table->string('Memail');
            $table->integer('Mphone');
            $table->json('checkboxes')->nullable();
            $table->date('Mdate'); 
            $table->time('Mtime')->nullable();     
            $table->string('Mtextarea')->nullable();
            $table->string('file')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('relocations');
    }
};
