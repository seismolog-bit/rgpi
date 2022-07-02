<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use function GuzzleHttp\default_ca_bundle;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            // detail
            $table->string('nik');
            $table->string('tempat_lahir');
            $table->string('tgl_lahir');
            $table->tinyInteger('jk');
            $table->string('agama');
            $table->string('pendidikan');
            $table->string('alamat');
            $table->string('pengurus_tingkat')->nullable();
            $table->string('provinsi')->nullable();
            $table->string('kabko')->nullable();
            $table->string('kecamatan')->nullable();
            $table->string('kelurahan')->nullable();
            $table->tinyInteger('jabatan');
            $table->string('no_hp')->nullable();
            $table->string('photo')->default('photo.jpg')->nullable();
            $table->string('ktp')->default('ktp.jpg')->nullable();
            $table->tinyInteger('status')->default(1);
            $table->boolean('is_return')->default(false);
            $table->boolean('is_active')->default(true);
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
};
