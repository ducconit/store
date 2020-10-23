<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSlidesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
//        'image','link','title_small','title_big','key','value','type'
        Schema::create('slides', function (Blueprint $table) {
            $table->id();
            $table->text('image');
            $table->text('link');
            $table->string('title_small')->nullable();
            $table->string('title_big')->nullable();
            $table->string('type')->default('sale')->comment('price or code');
            $table->string('key');
            $table->string('value');
            $table->boolean('status')->default(1);
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
        Schema::dropIfExists('slides');
    }
}
