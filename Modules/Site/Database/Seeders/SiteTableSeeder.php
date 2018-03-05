<?php

namespace Modules\Site\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class SiteTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        DB::table('sites')->insert([
            'id' => 1,
            'name' => 'Alison\'s Blog',
            'description' => 'A blog about games and stuff.',
            'theme' => '',
            'user_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // $this->call("OthersTableSeeder");
    }
}
