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
        Schema::create('crusts', function (Blueprint $table) {
            $table->id();
            $table->string('crustTitle');
            $table->string('tags');
            $table->string('company');
            $table->string('crustLocation');
            $table->string('contactEmail');
            $table->string('website');
            $table->longText('crustDescription');
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
        Schema::dropIfExists('crusts');
    }
};
