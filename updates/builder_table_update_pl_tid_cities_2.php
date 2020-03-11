<?php namespace Pl\Tid\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdatePlTidCities2 extends Migration
{
    public function up()
    {
        Schema::table('pl_tid_cities', function($table)
        {
            $table->text('content')->nullable();
            $table->string('meta_title')->nullable();
            $table->text('meta_description')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('pl_tid_cities', function($table)
        {
            $table->dropColumn('content');
            $table->dropColumn('meta_title');
            $table->dropColumn('meta_description');
        });
    }
}
