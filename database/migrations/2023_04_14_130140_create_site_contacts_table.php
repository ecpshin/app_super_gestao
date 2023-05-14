<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSiteContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('site_contacts', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->string('telefone', 20);
            $table->string('email');
            $table->unsignedBigInteger('subject_id');
            $table->text('mensagem');
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('subject_id')->references('id')->on('subjects');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('site_contacts', function (Blueprint $table)
        {
            $table->dropForeign('site_contacts_subject_id_foreign');
        });

        Schema::dropIfExists('site_contacts');
    }
}
