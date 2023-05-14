<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AjustsBranchProductBranches extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('branches', function(Blueprint $table){
            $table->id();
            $table->timestamps();
            $table->softDeletes();
        });
        
        Schema::create('branch_products', function(Blueprint $table){
            $table->id();
            $table->unsignedBigInteger('branch_id');
            $table->unsignedBigInteger('product_id');
            $table->decimal('preco_venda', 8, 2)->default(0.01);
            $table->integer('estoque_min')->default(1);
            $table->integer('estoque_max')->default(1);
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('branch_id')->references('id')->on('branches');
                        
            $table->foreign('product_id')->references('id')->on('products');
        });        
    }
    
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {   
        Schema::table('branch_products', function (Blueprint $table) {
            $table->dropForeign('branch_products_product_id_foreign');
            $table->dropForeign('branch_products_branch_id_foreign');
            
            $table->dropColumn('product_id');
            $table->dropColumn('branch_id');
        });

        Schema::dropIfExists('branch_products');

        Schema::dropIfExists('branches');
    }
}
