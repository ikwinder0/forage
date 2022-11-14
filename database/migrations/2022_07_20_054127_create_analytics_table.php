<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnalyticsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('analytics', function (Blueprint $table) {
            $table->id();
            $table->string('ip');
            $table->string('country');
            $table->string('state');
            $table->string('city');
            $table->dateTime('date_time');
            $table->string('device');
            $table->string('target_url');
            $table->string('utm_parameter_source');
            $table->string('utm_parameter_medium');
            $table->string('utm_parameter_compaign');
            $table->string('utm_parameter_content');
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
        Schema::dropIfExists('analytics');
    }
}
