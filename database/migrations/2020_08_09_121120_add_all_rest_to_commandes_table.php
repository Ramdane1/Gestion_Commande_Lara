<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddAllRestToCommandesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('commandes', function (Blueprint $table) {
                        $table->string('tel');
                        $table->integer('quantite');
                        $table->string('type_couleur');
                        $table->float('prix');
                        $table->string('confirmation01');
                        $table->string('confirmation02');
                        $table->string('methode_livraison');
                        $table->string('tracking');
                        $table->string('etat_payement');
                        $table->string('etat_livraison');
                        $table->date('date_livraison');
                        $table->string('news_lettre');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('commandes', function (Blueprint $table) {
            $table->dropColumn(['tel','quantite','type_couleur','prix','confirmation01','confirmation02','methode_livraison','tracking',
                                'etat_payement','etat_livraison','date_livraison','news_lettre']);
        });
    }
}
