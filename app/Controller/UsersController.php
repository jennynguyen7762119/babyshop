<?php
App::uses('AppController', 'Controller');

class UsersController extends AppController{
	var $helper = array('Form','Helper','Session','Html');
	
	public function admin_index()
	{
		//echo 'ggg';die;
		$this -> layout = "/admin/login";
	}
	
	public function admin_login() {
		if ($this -> request -> is('post')){
			$login_data = $this -> request -> data['Users'];
			$this -> User -> set($login_data);
			$lastUrl = $this -> Session -> read('lastUrl');
			//if the validation is not ok
			if($this -> User -> validates() == FALSE){
				$error = $this -> User -> validationErrors;
				$this -> Session -> setFlash($error, 'flash_bad', array(), 'bad');
				$this -> redirect(array( 'controller' => 'users', 'action' => 'index'));
			}
			$user = $this -> User -> user_login($login_data);
			if($user != FALSE){
				$this -> Session ->write(SYS_LOG_000, $user);
				// save to session and redirect to top page
				if(empty($lastUrl)){
					$this -> redirect(array('controller' => 'top', 'action' => 'index'));
				}else{
					$this -> redirect($lastUrl);
				}
			}else{
				$err_msg = Configure::read(SYS_LOG_000.".MissIdOrPass");
				$this -> Session -> setFlash($err_msg, 'flash_bad', array(), 'bad');
				$this -> redirect(array('controller' => 'user', 'action' => 'index'));
			}
		}
	}
	
	public function admin_logout(){
		if($this -> Session ->check(SYS_LOG_000) == TRUE)
		{
			$this -> Session -> detroy();
		}
		//
		$this0 -> redirect(array('controller' => 'users', 'action' => 'index'));
	}
}
