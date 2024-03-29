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
        Schema::create(
            'lead_discussions', function (Blueprint $table){
            $table->id();
            $table->unsignedBigInteger('lead_id');
            $table->text('comment');
            $table->integer('created_by');
            $table->foreign('lead_id')->references('id')->on('leads')->onDelete('cascade');
            $table->timestamps();
        }
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lead_discussions');
    }
};
