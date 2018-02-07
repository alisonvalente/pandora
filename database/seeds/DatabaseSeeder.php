<?php

use Illuminate\Database\Seeder;

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
            \Modules\Core\Database\Seeders\CoreDatabaseSeeder::class,
        	\Modules\User\Database\Seeders\UserDatabaseSeeder::class,
        	\Modules\Site\Database\Seeders\SiteDatabaseSeeder::class,
            \Modules\Panel\Database\Seeders\PanelDatabaseSeeder::class,
        ]);
    }
}
