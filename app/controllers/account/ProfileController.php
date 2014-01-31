<?php namespace Controllers\Account;
use File;
use Str;
use AuthorizedController;
use Input;
use Redirect;
use Sentry;
use Validator;
use View;

class ProfileController extends AuthorizedController {

	/**
	 * User profile page.
	 *
	 * @return View
	 */
	public function getIndex()
	{
		// Get the user information
		$user = Sentry::getUser();

		// Show the page
		return View::make('frontend/account/profile', compact('user'));
	}

	/**
	 * User profile form processing page.
	 *
	 * @return Redirect
	 */
	public function postIndex()
	{
		// return dd(Input::all());
		// Declare the rules for the form validation
		$rules = array(
			'first_name' => 'required|min:3',
			'last_name'  => 'required|min:3',
			'website'    => 'url',
			'gravatar'   => 'email',
			'avatar'     => 'image|max:2000'
		);
		// Create a new validator instance from our validation rules
		$validator = Validator::make(Input::all(), $rules);

		// If validation fails, we'll exit the operation now.
		if ($validator->fails())
		{
			// Ooops.. something went wrong
			return Redirect::back()->withInput()->withErrors($validator);
		}
		if(Input::file('avatar')){
			$avt_input = Input::file('avatar');
			// ta se dat duong dan trong images/avatars 
			// voi ten file anh danh. avatar_{user_id}
			if(!File::isDirectory(public_path()."/images")){
				File::makeDirectory(public_path()."/images");
			}
			if(!File::isDirectory(public_path()."/images/avatars")){
				File::makeDirectory(public_path()."/images/avatars");
			}
			//duong dan noi chua anh avatar
			$path = public_path()."/images/avatars";
			// xac dinh duoi cua file anh.
			$ext = File::extension($avt_input->getClientOriginalName());
			// tao ten moi cho file anh.
			$new_avt_name = 'avatar_'.Sentry::getUser()->id.".".$ext;
			if(File::isFile($path.'/'.Sentry::getUser()->avatar)){
				File::delete($path.'/'.Sentry::getUser()->avatar);
			}
			// kiem tra xem da co file nao ten giong the chua
			// while(File::isFile($path."/".$new_avt_name)){
			// 	// new co roi thi tao ten them 3 ki tu ngau nhien
			// 	$new_avt_name = 'avatar_'.Sentry::getUser()->id.Str::random(3).".".$ext;
			// }
			//Luu lai
			$avt_input->move($path, $new_avt_name);
			// duong an luu se danh
			$avt_url = 'images/avatars/'.$new_avt_name;
			// khi xuat ra  link anh kieu 
			// <img src="{{ URL::to($user->avatar) }}">

		}
		// Grab the user
		$user = Sentry::getUser();

		// Update the user information
		$user->first_name = Input::get('first_name');
		$user->last_name  = Input::get('last_name');
		$user->birthday   = Input::get('birthday');
		$user->uni        = Input::get('uni');
		$user->facebook   = Input::get('facebook');
		$user->website    = Input::get('website');
		$user->country    = Input::get('country');
		if(isset($avt_url)){
			$user->avatar     = $avt_url;
		}
		$user->status     = Input::get('status');
		$user->gravatar   = Input::get('gravatar');
		$user->youtube    = Input::get('gravatar');
		$user->p_conghien = Input::get('p_conghien');
		$user->p_phonvinh = Input::get('p_phonvinh');
		$user->save();

		// Redirect to the settings page
		return Redirect::route('profile')->with('success', 'Cập nhật thành công');
	}

}
