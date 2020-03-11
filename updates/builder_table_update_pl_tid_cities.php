<?php namespace Pl\Tid\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdatePlTidCities extends Migration
{
    public function up()
    {
        Schema::table('pl_tid_cities', function($table)
        {
            $table->integer('state_id')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('pl_tid_cities', function($table)
        {
            $table->dropColumn('state_id');
        });
    }
}
