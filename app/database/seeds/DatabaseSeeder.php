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
        $user->password = Hash::make($_ENV['ADMIN_PASS']);
        $user->role = 'admin';
        $user->save();
        $user->img_path = '/img-upload/' . $user->id . '-face.jpg';
        $user->save();

        $user = new User();
        $user->first_name = 'Brandon';
        $user->last_name = 'Chiuminetta';
        $user->email = 'brandon@codeup.com';
        $user->password = Hash::make($_ENV['USER_PASS']);
        $user->role = 'user';
        $user->save();
        $user->img_path = '/img-upload/' . $user->id . '-brandon.jpg';
        $user->save();

        $user = new User();
        $user->first_name = 'Dominick';
        $user->last_name = 'Zucconni';
        $user->email = 'dom@codeup.com';
        $user->password = Hash::make($_ENV['USER_PASS']);
        $user->role = 'user';
        $user->save();
        $user->img_path = '/img-upload/' . $user->id . '-dom.jpg';
        $user->save();        

        $user = new User();
        $user->first_name = 'Zoargad';
        $user->last_name = 'Sanchez';
        $user->email = 'zoargad@codeup.com';
        $user->password = Hash::make($_ENV['USER_PASS']);
        $user->role = 'user';
        $user->save();
        $user->img_path = '/img-upload/' . $user->id . '-zoargad.jpg';
        $user->save();        

        $user = new User();
        $user->first_name = 'Robert';
        $user->last_name = 'Reveal';
        $user->email = 'robert@codeup.com';
        $user->password = Hash::make($_ENV['USER_PASS']);
        $user->role = 'user';
        $user->save();
    }

}

class PostTableSeeder extends Seeder {

    public function run()
    {
        for ($i=1; $i <= 30; $i++) { 
	        $post = new Post();
	        $post->user_id = mt_rand(1,5);
	        $post->title = "This is title $i.";
	        $post->body = "Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.";
	        $post->slug = $post->title;
            $post->save();
        }
    }

}
