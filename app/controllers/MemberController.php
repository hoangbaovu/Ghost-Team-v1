<?php

class MemberController extends BaseController {

	protected $layout = 'frontend/layouts/default';

	public function index()
	{
		$users = User::all();

		$this->layout->content = View::make('frontend.member.index', compact('users'));
	}

	public function show($id)
	{
		$user = User::find($id);

		// Kiểm tra các thành viên không tồn tại
		if (is_null($user))
		{
			return Response::view('error.404', array(), 404);
		}

		$this->layout->content = View::make('frontend.member.show', compact('user'));
	}

}