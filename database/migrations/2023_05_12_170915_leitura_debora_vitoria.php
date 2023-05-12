<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('leituradeboravitoria', function (Blueprint $table) {
            $table->id();
            $table->date('data_leitura');
            $table->string('hora_leitura',20);
            $table->float('valor_sensor');
            $table->foreignId('sensordeboravitoria_id')->nullable()->constrained('sensordeboravitoria')->default(null);
            $table->foreignId('macdeboravitoria_id')->nullable()->constrained('macdeboravitoria')->default(null);
            $table->timestamps();
        });

        Schema::disableForeignKeyConstraints();

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
