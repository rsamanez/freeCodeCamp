<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->truncateTables([
            'users',
            'profile_user',
            'profiles',
            'posts'
        ]);
        $this->call(UserTableSeeder::class);
        $this->call(ProfileTableSeeder::class);
        $this->call(PostTableSeeder::class);
    }
    protected function truncateTables(array $tables){

       // DB::statement('SET FOREIGN_KEY_CHECKS = 0;');

        foreach ($tables as $table){
            DB::table($table)->truncate();
        }

        //DB::statement('SET FOREIGN_KEY_CHECKS = 1;');
    }
}
