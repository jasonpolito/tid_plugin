<?php namespace Pl\Tid\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreatePlTidCitiesZips extends Migration
{
    public function up()
    {
        Schema::create('pl_tid_cities_zips', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('city_id')->unsigned();
            $table->integer('zip_id')->unsigned();
            $table->primary(['city_id','zip_id']);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('pl_tid_cities_zips');
    }
}
