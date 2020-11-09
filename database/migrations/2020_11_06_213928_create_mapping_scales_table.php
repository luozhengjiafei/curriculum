<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMappingScalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mapping_scales', function (Blueprint $table) {
            $table->bigIncrements('map_scale_id');
            $table->string('title');
            $table->string('abbreviation');
            $table->text('description');
            $table->char('colour', 7);
            $table->unsignedBigInteger('program_id');
            $table->timestamps();

            $table->foreign('program_id')->references('program_id')->on('programs')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mapping_scales');
    }
}
