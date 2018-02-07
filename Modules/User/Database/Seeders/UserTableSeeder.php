<?php

namespace Modules\User\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        DB::table('users')->insert([
            'id' => 1,
            'name' => 'Alison Valente',
            'email' => 'alisonvm@gmail.com',
            'password' => bcrypt('445566'),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // $this->call("OthersTableSeeder");
    }
}
