<?php

class StarController extends BaseController {

	protected $layout = 'frontend/layouts/default';

	// public function index()
	// {
	// 	$group = Group::find(4);
	// 	$users = $group->getAllUserId();

	// 	$users = User::all();

	// 	$this->layout->content = View::make('frontend.pages.star', compact('users'));
	// }
	public function users(){


		return View::make('frontend.pages.star');


		// echo 'Danh sach thanh vien nhom: ' .$group->name."<br/>";
		// foreach($users as $user){
		// 	echo $user->email." ".$user->first_name."<br/>";
		// }
	}
}