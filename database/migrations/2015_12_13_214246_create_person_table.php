<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonTable extends Migration
{
    const TABLE_NAME        = 'person';

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(self::TABLE_NAME, function (Blueprint $table) {
            // UUID.
            $table->char('uuid', 36)
                  ->index();

            // Username.
            $table->string('username')
                  ->unique()
                  ->index();

            // E-mail.
            $table->string('email')
                  ->unique()
                  ->index();

            // Password.
            $table->string('password', 60);

            // Is Confirmed?
            $table->boolean('is_confirmed')
                  ->index();

            // Timestamps.
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
        Schema::drop(self::TABLE_NAME);
    }
}
