<?php namespace Octohelp\Picker\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreateTestsTable extends Migration
{

    public function up()
    {
        Schema::create('octohelp_picker_tests', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('octohelp_picker_tests');
    }

}
