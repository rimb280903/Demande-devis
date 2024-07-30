<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('tag_blog', function (Blueprint $table) {
            $table->unsignedBigInteger('id_tag');
            $table->unsignedBigInteger('id_blog');
            $table->timestamps();

            $table->foreign('id_tag')->references('id')->on('tags')->onDelete('cascade');
            $table->foreign('id_blog')->references('id')->on('blogs')->onDelete('cascade');

            // Optionally, you can define a composite primary key
            // $table->primary(['id_tag', 'id_blog']);
        });
    }

    public function down()
    {
        Schema::dropIfExists('tag_blog');
    }
};
