<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('requests', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('experience');
            $table->string('level');
            $table->integer('numRecruit');
            $table->date('open');
            $table->date('close');
            $table->longText('description');
            $table->integer('status');
            $table->bigInteger('user_id')->unsigned()->nullable();
            $table->bigInteger('skill_id')->unsigned();
            $table->bigInteger('group_id')->unsigned()->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('requests');
    }
};
