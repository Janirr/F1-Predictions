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
        Schema::create('predictions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('first');
            $table->string('second');
            $table->string('third');
            $table->string('fourth');
            $table->string('fifth');
            $table->string('sixth');
            $table->string('seventh');
            $table->string('eighth');
            $table->string('nineth');
            $table->string('tenth');
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
        Schema::dropIfExists('predictions');
    }
};
