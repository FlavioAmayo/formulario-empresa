<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddCpersexoToPersonaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('persona', function (Blueprint $table) {
            $table->char('cPerSexo', 15)->nullable()->default('Masculino')->after('nPerEdad');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('persona', function (Blueprint $table) {
            $table->dropColumn('cPerSexo');
        });
    }
}
