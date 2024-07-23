<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class AlteTableSiteContatosAddFkMotivoContatos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('site_contatos', function (Blueprint $table) {
            $table->unsignedBigInteger('motivo_contatos_id');
        });

        // movendo os dados de coluna
        DB::statement('update site_contatos set motivo_contatos_id = motivo_contato');

        // criando a fk e remover a coluna motivo_contato
        Schema::table('site_contatos', function(Blueprint $table) {
            $table->foreign('motivo_contatos_id')->references('id')->on('motivo_contatos');
            $table->dropColumn('motivo_contato');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // criando coluna motivo_contato e excluindo a fk
        Schema::table('site_contatos', function(Blueprint $table) {
            $table->integer('motivo_contato');
            $table->dropForeign('site_contatos_motivo_contatos_id_foreign');
        });
        
        // movendo os dados de coluna
        DB::statement('update site_contatos set motivo_contato = motivo_contatos_id');


        // removendo a coluna criada
        Schema::table('site_contatos', function (Blueprint $table) {
            $table->dropColumn('motivo_contatos_id');
        });

    }
}
