<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {

        //Add relacionamento na tabela jogos E removendo tabela categoria
        Schema::table('jogos', function (Blueprint $table) {
            $table->unsignedBigInteger('categoria_id')->after('nome');
            $table->foreign('categoria_id')->references('id')->on('categorias');
            $table->dropColumn('categoria');
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
         //Removendo relacionamento na tabela jogos
        Schema::table('jogos', function (Blueprint $table) {
            //removendo a fk
            $table->dropForeign('jogos_categoria_id_foreing');
            //removendo a coluna
            $table->dropColumn('categoria_id');
            //Add coluna de categoria da tabela jogos
            $table->string('categoria', 150)->after('nome');
        });
    }
};
