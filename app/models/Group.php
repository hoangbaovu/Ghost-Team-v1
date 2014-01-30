<?php

use Cartalyst\Sentry\Groups\Eloquent\Group as SentryGroupModel;

class Group extends SentryGroupModel {

	public function getAllUsers(){

		return DB::table('users_groups')
		->join('users', 'users.id', '=', 'users_groups.user_id')
		->wheregroup_id($this->id)
		->get();
	}

	public function getAllCongHien() {

		return DB::table('users_groups')
			->join('users', 'users.id', '=', 'users_groups.user_id')
			->wheregroup_id($this->id)
			->orderBy('p_conghien', 'DESC')
			->get();
	}

	public function getAllPhonVinh() {

		return DB::table('users_groups')
			->join('users', 'users.id', '=', 'users_groups.user_id')
			->wheregroup_id($this->id)
			->orderBy('p_phonvinh', 'DESC')
			->get();
	}

	public function getTopCongHien() {

		return DB::table('users_groups')
			->join('users', 'users.id', '=', 'users_groups.user_id')
			->wheregroup_id($this->id)
			->orderBy('p_conghien', 'DESC')
			->take(3)
			->get();
	}

	public function getTopPhonVinh() {

		return DB::table('users_groups')
			->join('users', 'users.id', '=', 'users_groups.user_id')
			->wheregroup_id($this->id)
			->orderBy('p_phonvinh', 'DESC')
			->take(3)
			->get();
	}
}
