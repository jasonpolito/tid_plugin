<?php namespace Pl\Tid\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreatePlTidZips extends Migration
{
    public function up()
    {
        Schema::create('pl_tid_zips', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
            $table->string('zip');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('pl_tid_zips');
    }
}
