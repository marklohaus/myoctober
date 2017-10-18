<?php namespace Lightreadinglite\Newsreader\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateArticleCategoriesTable extends Migration
{
    public function up()
    {
        Schema::create('lightreadinglite_newsreader_article_categories', function(Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('lightreadinglite_newsreader_article_categories');
    }
}
