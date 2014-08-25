<?php
	/**
	 * 
	 */
	App::uses('AuthComponent', 'Controller/Component');
	App::uses('Common', 'Lib');
	App::uses('Sanitize', 'Utility');
	class Account extends AppModel {
		var $useTable = "m_user";
		var $validate= NULL;
		function __construct(){
			parent::__construct();
			$this -> validate = array(
				'adminID' => array(
					'alphaNumeric' => array(
                    'rule' => array('custom', '/^[a-zA-Z0-9]*$/i'),
                    'message' => Configure::read(SYS_ACC_000.'.AdminUserIDAlphaNum')
                	)
				),
				'full_name' =>array(
					'NotEmpty' => array(
						'rule' => 'notEmpty',
						'required' => true,
						'message' => Configure::read(SYS_ACC_000.'.AdminNameRequired')
					),
					'maxLength' => array(
		                    'rule' => array('maxLength', 64),
		                    'message'   => Configure::read(SYS_ACC_000.'.AdminNameMaxLength')
		            )
				),
				'username' => array(
	                'NotEmpty' => array(
	                    'rule'    => 'NotEmpty',
	                    'required' => true,
	                    'message' => Configure::read(SYS_ACC_000.'.AdminUserIDRequired')
	                ),
	                'minLength' => array(
	                    'rule' => array('minLength', 6),
	                    'on'   => 'create',
	                    'message'   => Configure::read(SYS_ACC_000.'.AdminUserIDMinLength')
	                ),
	                'maxLength' => array(
	                    'rule' => array('maxLength', 64),
	                    'message'   => Configure::read(SYS_ACC_000.'.AdminUserIDMaxLength')
	                ),
	                'alphaNumeric' => array(
	                    'rule' => array('custom', '/^[a-zA-Z0-9]*$/i'),
	                    'message' => Configure::read(SYS_ACC_000.'.AdminUserIDAlphaNum')
	                ),
	                'isUnique' => array(
	                    'rule'      => 'isUnique',
	                    'on'        => 'create',
	                    'message'   => Configure::read(SYS_ACC_000.'.ExistingAdminID')
	                )
           		),
	           	'password' => array(
	                'NotEmpty' => array(
	                    'rule'    => 'NotEmpty',
	                    'required' => true,
	                    'on' => 'create',
	                    'message' => Configure::read(SYS_ACC_000.'.AdminPassRequired')
	                ),
	                'minLength' => array(
	                    'on' => 'create',
	                    'rule' => array('minLength', 6),
	                    'message'   => Configure::read(SYS_ACC_000.'.AdminPassMinLength')
	                ),
	                'maxLength' => array(
	                    'rule' => array('maxLength', 64),
	                    'message'   => Configure::read(SYS_ACC_000.'.AdminPassMaxLength')
	                ),
	                'alphaNumeric' => array(
	                    'rule' => array('custom', '/^[a-zA-Z0-9]*$/i'),
	                    'message' => Configure::read(SYS_ACC_000.'.AdminPassAlphaNum')
	                ),
	                'checkPassMatchAdminID' => array(
	                    'rule' => 'checkPassMatchAdminID',
	                    'message'   => Configure::read(SYS_ACC_000.'.EqualAdminIdPass')
	                )
	            ),
           		'email' => array(
	                'NotEmpty' => array(
	                    'rule'    => 'NotEmpty',
	                    'required' => true,
	                    'message' => Configure::read(SYS_ACC_000.'.EmailRequire')
	                ),
	                'email' => array(
	                    'rule' => array('email', true),
	                    'message' => Configure::read(SYS_COM_000.'.WrongEmail')
	                )
	            )
			);
		}
		public function setDBMapping( $input_data ) {
	        foreach($input_data as $k => $v) {
	            $input_data[$k] = Sanitize::clean($v, array('encode'=>false));
	        }
	        $data = array();
	        if(isset($input_data['username']) == TRUE ) {
	            $data[$this->alias]['username']   = $input_data['username'];
	        }
	        if(isset($input_data['password']) == TRUE ) {
	            $data[$this->alias]['password']   = $input_data['password'];
	        }
	        if(isset($input_data['full_name']) == TRUE ) {
	            $data[$this->alias]['full_name'] = $input_data['full_name'];
	        }
	        if(isset($input_data['role']) == TRUE ) {
	            $data[$this->alias]['role'] = $input_data['role'];
	        }
	        if(isset($input_data['status']) == TRUE ) {
	            $data[$this->alias]['status'] = $input_data['status'];
	        }
			if(isset($input_data['image']) == TRUE ) {
	            $data[$this->alias]['image'] = $input_data['image'];
	        }
	        $data[$this->alias]['modified_by'] = CakeSession::read(SYS_LOG_000.'.User.username');
	        $this->set($data);
	    }
 		public function beforeSave($options=array()) {
	        // get new password
	        if(empty($this->data[$this->alias]['password']) != TRUE){
	            $password = $this->data[$this->alias]['password'];
	        }
	        if( empty($password) == FALSE ) {
	            //encrypt new password before saving
	            $this->data[$this->alias]['password'] = AuthComponent::password($password);
	        }
	        //edit
	        if($this->id) {
	            $this->data[$this->alias]['modified_date'] = date('Y-m-d H:i:s');
	        }
	        else {
	            //add
	            $this->data[$this->alias]['created_date'] = date('Y-m-d H:i:s');
	            $this->data[$this->alias]['modified_date'] = date('Y-m-d H:i:s');
	        }
	        return true;
	    }
	}
	