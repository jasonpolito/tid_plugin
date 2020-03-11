<?php namespace Pl\Tid\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreatePlTidStates extends Migration
{
    public function up()
    {
        Schema::create('pl_tid_states', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
            $table->string('title')->nullable();
            $table->string('short_title')->nullable();
            $table->string('slug')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('pl_tid_states');
    }
}
