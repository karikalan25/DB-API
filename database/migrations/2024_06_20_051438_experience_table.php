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
        Schema::create('experience', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedbigInteger('employe_id');
            $table->foreign('employe_id')->references('id')->on('employe');
            $table->string('company',50);
            $table->string('designation',50);
            $table->date('start_date');
            $table->date('end_date');
            $table->integer('experiences');
            $table->timestamps();


        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('experience');
    }
};
