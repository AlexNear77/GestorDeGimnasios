<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->bigIncrements('id');
            //$table->unsignedBigInteger('user_id');//->nullable()->default(null);
            $table->unsignedBigInteger('category_id')->nullable()->default(null);
            $table->text('description');
            $table->integer('stock');
            $table->integer('buy');
            $table->integer('sale');
            //$table->string('url')->unique();//lo utilizamos para hacer url amigables
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('productos');
    }
}
