<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProduitTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produit', function (Blueprint $table) {
            $table->id();
            $table->string('nom_P');
            $table->text('description_P')->nullable();
            $table->decimal('prix_base', 10, 2);
            $table->unsignedBigInteger('id_Categorie');
            $table->foreign('id_Categorie')->references('id')->on('categorie')->onDelete('cascade');
            $table->string('image_path')->nullable();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
