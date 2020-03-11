<?php namespace Pl\Tid\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdatePlTidListings extends Migration
{
    public function up()
    {
        Schema::table('pl_tid_listings', function($table)
        {
            $table->boolean('is_featured')->default(0);
        });
    }
    
    public function down()
    {
        Schema::table('pl_tid_listings', function($table)
        {
            $table->dropColumn('is_featured');
        });
    }
}
