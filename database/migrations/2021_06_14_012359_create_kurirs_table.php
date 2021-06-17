<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKurirsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kurirs', function (Blueprint $table) {     
                $table->integer('Id_Kurir')->primary;
                $table->string('Kode_Kurir', 50);
                $table->string('Nama_Kurir', 10);
                $table->text('Kategori_Kurir');
                $table->string('Perusahaan');            
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
        Schema::dropIfExists('kurirs');
    }
}
