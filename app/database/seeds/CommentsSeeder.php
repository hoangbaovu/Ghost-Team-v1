<?php

class CommentsSeeder extends Seeder {

	public function run()
	{
		// Initialize empty array
		$comments = array();

		// Blog Post 1 comments
		$date = new DateTime;
		$comments[] = array(
			'user_id'    => 1,
			'post_id'    => 1,
			'content'    => file_get_contents(__DIR__.'/comment1-content.txt'),
			'created_at' => $date->modify('-1 day +1 hour'),
			'updated_at' => $date->modify('-1 day +1 hour'),
		);

		// Delete all the posts comments
		DB::table('comments')->truncate();

		// Insert the posts comments
		Comment::insert($comments);
	}

}
