<?php

use Illuminate\Database\Seeder;
use App\Post;
use App\User;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = User::all();
        foreach ($users as $user){
            factory(Post::class,20)->create([
                'user_id' => $user->id
            ]);
            foreach ($users as $follow) {
                $user->following()->toggle($follow->profile);
            }
        }
    }
}
