<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 100);
            $table->string('email', 100)->unique();
            $table->string('password', 100);
            $table->string('type', 100); // ADMIN, CLIENTE
            $table->integer('status'); // 0 - Desativado, 1 - Ativado
            $table->string('birth', 100)->nullable();
            $table->string('birthplace', 100)->nullable();
            $table->string('maritalStatus', 100)->nullable();
            $table->text('address')->nullable();

            $table->text('bank')->nullable();
            $table->text('agency')->nullable();
            $table->text('accountType')->nullable();
            $table->text('cardDigit')->nullable();
            $table->text('cardNumber')->nullable();
            $table->text('cardName')->nullable();
            $table->text('cardExpiringDate')->nullable();
            $table->text('cardCvc')->nullable();
            $table->text('cardBanner')->nullable();

            $table->text('userFacebook')->nullable();
            $table->text('userGooglePlus')->nullable();
            $table->text('userTwitter')->nullable();
            $table->text('userLinkedin')->nullable();

            $table->string('cpf', 100)->nullable();
            $table->string('tituloEleitor', 100)->nullable();
            $table->string('rg', 100)->nullable();
            $table->string('cnh', 100)->nullable();
            $table->string('company', 100)->nullable();
            $table->text('companyAddress')->nullable();

            $table->string('admission', 100)->nullable();
            $table->text('picture')->nullable();

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
}
