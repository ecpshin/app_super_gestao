<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddressesTable extends Migration
{
    public function up()
    {
        Schema::create('addresses', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('client_id')->unique();
            $table->string('cep', 10)->nullable()->default('00000-000');
            $table->string('logradouro')->nullable()->default('Não informado.');
            $table->string('complemento', 50)->nullable()->default('-');
            $table->string('bairro', 100)->nullable()->default('Não informado.');
            $table->string('localidade',100)->nullable()->default('Não informado.');
            $table->string('uf', 2)->nullable()->default('XX');
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('client_id')->references('id')->on('clients');
        });
    }

    public function down()
    {
        Schema::disableForeignKeyConstraints();
        Schema::dropIfExists('addresses');
        Schema::enableForeignKeyConstraints();
    }
}
