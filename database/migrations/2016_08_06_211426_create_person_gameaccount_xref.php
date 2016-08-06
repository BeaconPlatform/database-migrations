<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonGameaccountXref extends Migration
{
    const TABLE_NAME        = 'person_gameaccount_xref';

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

            // Game Account ID
            $table->integer('game_account_id', 20)
                  ->index()
                  ->unique();

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
