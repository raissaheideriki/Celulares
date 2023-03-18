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
        Schema::create('celulares', function (Blueprint $table) {
            $table->id();
            $table->string('marca', 100);
            $table->date('ano');
            $table->decimal('valor', 8, 2);
            $table->date('garantia');
            $table->text('descrição', 100);
            $table->string('processador', 100);
            $table->integer('memória ram');
            $table->string('sistema operacional', 100);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('celulares');
    }
};
