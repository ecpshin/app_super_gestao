<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterProductOrdersAddQuantidade extends Migration
{
    public function up()
    {
        Schema::table('product_orders', function(Blueprint $table){
            $table->integer('quantidade')->after('product_id')->default(0);
        });
    }

    public function down()
    {
        Schema::table('product_orders', function(Blueprint $table){
            $table->dropColumn('quantidade');
        });
    }
}
