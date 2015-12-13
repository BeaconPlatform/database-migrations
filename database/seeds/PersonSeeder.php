<?php

class PersonSeeder extends Seeder
{
    const TOTAL_PERSON_COUNT        = 20;

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Iterate TOTAL_PERSON_COUNT times and create accounts.
        for ($count = 0; $count < self::TOTAL_PERSON_COUNT; $count++) {
            $uuid           = $this->faker->uuid;
            $username       = $this->faker->userName;
            $password       = $this->faker->password(6, 60);
            $timestamp      = $this->faker->dateTime;
            $email          = $this->faker->email;
            $isConfirmed    = $this->faker->boolean(75);

            // Insert to the table.
            $this->database->table('person')
                           ->insert([
                               'uuid'           => $uuid,
                               'username'       => $username,
                               'password'       => $password,
                               'created_at'     => $timestamp,
                               'updated_at'     => $timestamp,
                               'email'          => $email,
                               'is_confirmed'   => $isConfirmed
                           ]);
        }
    }
}
