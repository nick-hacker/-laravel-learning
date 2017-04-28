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
        DB::table('users')->delete();
        DB::table('posts')->delete();
        DB::table('comments')->delete();

       $posts = factory('App\Post', 30)->create();

       $posts->each(function($post) {
            factory('App\Comment', 10)->create(['post_id' => $post->id]);
       });
    }
}
