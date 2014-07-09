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
        $user->first_name = 'Cole';
        $user->last_name = 'Reveal';
        $user->email = 'cole@codeup.com';
        $user->password = Hash::make('letmein');
        $user->role = 'admin';
        $user->save();

        $user = new User();
        $user->first_name = 'Brandon';
        $user->last_name = 'Chiuminetta';
        $user->email = 'brandon@codeup.com';
        $user->password = Hash::make('letmein');
        $user->role = 'user';
        $user->save();

        $user = new User();
        $user->first_name = 'Dominick';
        $user->last_name = 'Zucconni';
        $user->email = 'dom@codeup.com';
        $user->password = Hash::make('letmein');
        $user->role = 'user';
        $user->save();
    }

}

class PostTableSeeder extends Seeder {

    public function run()
    {
        for ($i=1; $i <= 15; $i++) { 
	        $post = new Post();
	        $post->user_id = mt_rand(1,3);
	        $post->title = "This is title $i.";
	        $post->body = "Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.";
	        $post->save();
        }
    }

}
