<?php
App::uses('AppController', 'controller');

class AccountsController extends AppController{
	public $helper = array('Form', 'Html', 'App');
	
	public function admin_index(){
		$this -> layout = "/admin/default";
	}
	
	public function admin_add(){
		$this -> layout = "/admin/default";
		if($this -> request -> is('post') == TRUE){
			$this -> request -> data['Accounts'] = array_map('trim', $this->request->data["Accounts"]);
			var_dump($this -> request -> data['Accounts']);
			//set DB mapping for input values
			$this -> Account ->setDBMapping($this -> request -> data['Accounts']);
			
			if($this ->Account -> Save()== TRUE){
				//show the update message on the account search screen
				$update_msg = Configure::read(SYS_COM_000.'.AddSuccess');
				$this -> Session -> setFlash($update_msg, 'flash_header', array(), 'header');
				$this -> redirect(array('action' => 'index'));
			}
			$error =$this -> Account -> validationErrors;
			$this -> Session -> setFlash($error, 'flash_bad', array(), 'bad');
		}
	}
}
