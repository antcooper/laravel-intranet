<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDomainsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('domains', function (Blueprint $table) {
            $table->increments('id');
            $table->string('domain', 100);
            $table->decimal('charge', 5,2)->default(0);
            $table->timestamp('renewal_date');
            $table->tinyInteger('duration')->default(12)->unsigned();
            $table->boolean('send_notification')->default(0);
            $table->string('email', 100);
            $table->string('first_name', 50);
            $table->string('last_name', 50);
            $table->string('company', 100)->nullable();
            $table->text('notes')->nullable();
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
        Schema::drop('domains');
    }
}
