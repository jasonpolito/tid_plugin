<?php namespace Pl\Tid\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdatePlTidListings3 extends Migration
{
    public function up()
    {
        Schema::table('pl_tid_listings', function($table)
        {
            $table->string('meta_title')->nullable();
            $table->text('meta_description')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('pl_tid_listings', function($table)
        {
            $table->dropColumn('meta_title');
            $table->dropColumn('meta_description');
        });
    }
}
