<?php namespace Ununnunium\Slider\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateUnunnuniumSlider extends Migration
{
    public function up()
    {
        Schema::create('ununnunium_slider_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('title')->nullable();
            $table->string('text')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('ununnunium_slider_');
    }
}
