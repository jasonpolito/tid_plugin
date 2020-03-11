<?php namespace Pl\Tid\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdatePlTidListings2 extends Migration
{
    public function up()
    {
        Schema::table('pl_tid_listings', function($table)
        {
            $table->text('content')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('pl_tid_listings', function($table)
        {
            $table->dropColumn('content');
        });
    }
}
