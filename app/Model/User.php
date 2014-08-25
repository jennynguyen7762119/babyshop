<?php
App::uses('AuthComponent', 'Controller/Component');
class User extends AppModel{
	var $useTable = "m_user";
	var $validate = NULL;
	public function __construct() {
        parent::__construct();
        $this->validate = array(
            'adminId' => array(
                'NotEmpty' => array(
                    'rule'    => 'NotEmpty',
                    'required' => true,
                    'message' => Configure::read(SYS_LOG_000.'.IDRequired')
                ),
                'alphaNumeric' => array(
                    'rule'     => 'alphaNumeric',
                    'required' => true,
                    'message'  => Configure::read(SYS_LOG_000.'.AlphaNumber'),
                    'last' => true
                )
            ),
            'adminUserPass' => array(
                'NotEmpty' => array(
                    'rule'    => 'NotEmpty',
                    'required' => true,
                    'message' => Configure::read(SYS_LOG_000.'.PassRequired')
                )
            )
        );
    }
	
	// check login
	public function user_login($login_data){
		$result = FALSE;
		//get user from userID in DB
		$user = $this -> find('first', array('conditions' => array('username' => $login_data['adminId'])));
		// if the user was found
		if(empty($user) == FALSE){
			// encode password
			$password = AuthComponent::password($login_data['adminUserPass']);
			if($user['User']['password'] == $password){
				//remove password field out of user array
				unset($user['User']['password']);
				$result = $user ;
			}
		}
		return $result ;
	}
}
