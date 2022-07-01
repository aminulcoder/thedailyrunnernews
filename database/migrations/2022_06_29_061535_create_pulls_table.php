<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePullsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pulls', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('vot_id');
            $table->string('user_id')->nullable();
            $table->integer('yes')->default(0);
            $table->integer('no')->default(0);
            $table->integer('no_comment')->default(0);
            $table->string('ip_address')->nullable();
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
        Schema::dropIfExists('pulls');
    }
}
