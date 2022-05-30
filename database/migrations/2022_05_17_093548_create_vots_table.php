<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVotsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vots', function (Blueprint $table) {
            $table->id();
            $table->string('description');
            $table->integer('yes')->default(0);
            $table->integer('no')->default(0);
            $table->integer('no_comment')->default(0);
            $table->integer('total_vot')->default(0);
            $table->date('start_date');
            $table->date('end_date');
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
        Schema::dropIfExists('vots');
    }
}
