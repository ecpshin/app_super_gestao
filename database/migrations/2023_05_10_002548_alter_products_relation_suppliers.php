<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterProductsRelationSuppliers extends Migration
{
    public function up()
    {
        Schema::table('products', function (Blueprint $table){
            $table->unsignedBigInteger('supplier_id')->after('id')->default(1);
            $table->foreign('supplier_id')->references('id')->on('suppliers');
        });
    }

    public function down()
    {
        Schema::table('products', function (Blueprint $table){
            $table->dropForeign('products_supplier_id_foreign');
            $table->dropColumn('supplier_id');
        });
    }
}