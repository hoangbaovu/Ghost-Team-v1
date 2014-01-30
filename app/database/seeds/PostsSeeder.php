<?php

class PostsSeeder extends Seeder {

	public function run()
	{
		// Common data
		$common = array(
			'user_id' => 1,
			'content' => file_get_contents(__DIR__ . '/post-content.txt'),
		);

		// Initialize empty array
		$posts = array();

		// Blog post 1
		$date = new DateTime;
		$posts[] = array_merge($common, array(
			'title'      => 'Khởi tạo Website TheGhost',
			'slug'       => 'khoi-tao-website-theghost',
			'created_at' => $date->modify('-1 day'),
			'updated_at' => $date->modify('-1 day'),
		));

		// Delete all the blog posts
		DB::table('posts')->truncate();

		// Insert the blog posts
		Post::insert($posts);
	}

}
