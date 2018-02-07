<?php

use Illuminate\Database\Seeder;
use Modules\User\Database\Seeders\UserDatabaseSeeder;
use Modules\Site\Database\Seeders\SiteDatabaseSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
        	UserDatabaseSeeder::class,
        	SiteDatabaseSeeder::class,
        ]);
    }
}
