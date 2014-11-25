<?php
class AdminController extends BaseController {
	/**
	 * Redirect to the Login page.
	 */
	public function requestLogin() {
		return View::make('adminlogin');
	}

	/**
	 * Perform login action.
	 */
	public function doLogin() {
		$user = Input::get('username');
		$pass  = Input::get('password');
		if( Auth::admin()->attempt( array('username' => $user, 'password' => $pass) )){
			return Redirect::to('admin');
		} else {
			return Redirect::to('adminlogin')->with('flash_error', 'Invalid email/password combination.')->withInput();
		}
	}

	/**
	 * Perform logout action.
	 */
	public function requestLogout() {
		Session::flush();
		Session::regenerate();
		return Redirect::to('adminlogin')->with('flash_error', 'You have been logged out.');
	}

	/**
	 * Redirect to admin home screen.
	 */
	public function home() {
		return View::make('adminhome');
	}

	public function newUserView() {
		return View::make('adminnewuser');
	}
	
	public function newUserAction() {
		// TODO: implement this method
		return 'Implement method newUserAction...';
	}

	public function listUsersView() {
		$users = AdminUser::all();
		return View::make('adminlistuser')->with('users', $users);
	}

	public function listUsersAction() {
		// TODO: implement this method
		return 'Implement method listUsersAction...';
	}

	public function listTaskView() {
		// TODO: Add pagination ?
		// TODO: Create a GameTask model
		// $tasks = GameTask::all();
		$tasks = [ 'Task1', 'Task2', 'Task3' ];
		return View::make('adminlisttasks')->with('tasks', $tasks);
	}

	public function listTaskAction() {
		// TODO: implement this method
		return 'Implement method listTaskAction...';
	}
	
	public function newTaskView() {
		// TODO: implement this method
		return 'Implement method newTaskView...';
	}
	
	public function newTaskAction() {
		// TODO: implement this method
		return 'Implement method newTaskAction...';
	}
	
}
