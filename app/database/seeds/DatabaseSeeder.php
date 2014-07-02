<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		$this->call('UserTableSeeder');
		$this->call('PostTableSeeder');
	}

}

class UserTableSeeder extends Seeder {

    public function run()
    {
        DB::table('users')->delete();

        $user = new User();
        $user->email = 'cole@codeup.com';
        $user->password = Hash::make('letmein');
        $user->save();
    }

}

class PostTableSeeder extends Seeder {

    public function run()
    {
        for ($i=0; $i < 10; $i++) { 
	        $post = new Post();
	        $post->title = "This is title $i.";
	        $post->body = "This is body $i.";
	        $post->save();
        }
    }

}