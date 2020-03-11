<?php namespace Pl\Tid\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreatePlTidListings extends Migration
{
    public function up()
    {
        Schema::create('pl_tid_listings', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
            $table->string('slug')->nullable();
            $table->string('title')->nullable();
            $table->text('hours')->nullable();
            $table->string('address')->nullable();
            $table->integer('city_id')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('pl_tid_listings');
    }
}
