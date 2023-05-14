<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUnitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('units', function (Blueprint $table) {
            $table->id();
            $table->string('unit_name', 10);
            $table->string('description', 50);
            $table->timestamps();
            $table->softDeletes('deleted_at', 0);
        });

        Schema::table('products', function(Blueprint $table){
            $table->unsignedBigInteger('unit_id')->after('id');
            $table->foreign('unit_id')->references('id')->on('units');
        });
    
        Schema::table('product_details', function(Blueprint $table){
            $table->unsignedBigInteger('unit_id')->after('product_id');
            $table->foreign('unit_id')->references('id')->on('units');
        });
    }
    
    public function down()
    {
        Schema::table('product_details', function(Blueprint $table)
        {
            $table->dropForeign('product_details_unit_id_foreign');
            $table->dropColumn('unit_id');
        });
        
        Schema::table('products', function(Blueprint $table)
        {
            $table->dropForeign('products_unit_id_foreign');
            $table->dropColumn('unit_id');
        });

        Schema::dropIfExists('units');
    }
}
