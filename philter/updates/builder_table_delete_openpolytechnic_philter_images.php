<?php namespace Openpolytechnic\Philter\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableDeleteOpenpolytechnicPhilterImages extends Migration
{
    public function up()
    {
        Schema::dropIfExists('openpolytechnic_philter_images');
    }
    
    public function down()
    {
        Schema::create('openpolytechnic_philter_images', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
        });
    }
}
