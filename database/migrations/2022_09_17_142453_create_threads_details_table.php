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
        Schema::create('threads_details', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('threads_id')->index();
            $table->string('name')->nullable();
            $table->string('descript')->nullable();
            $table->string('image')->nullable();
            $table->string('url')->nullable();
            $table->foreign('threads_id')->references('id')->on('threads')->onDelete('cascade');
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
        Schema::dropIfExists('threads_details');
    }
};
