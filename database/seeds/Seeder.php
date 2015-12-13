<?php

use Illuminate\Database\Seeder as IlluminateSeeder;
use Illuminate\Database\DatabaseManager;
use Illuminate\Database\Connection as DatabaseConnection;
use Faker\Generator as FakerGenerator;

class Seeder extends IlluminateSeeder
{
    /**
     * @var     DatabaseConnection
     */
    protected $database;

    public function __construct(DatabaseManager $databaseManager, FakerGenerator $faker)
    {
        $this->database     = $databaseManager->connection();
        $this->faker        = $faker;
    }
}
