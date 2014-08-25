<?php
App::uses('AppController', 'Controller');
 class TopController extends AppController{
 	public $helper = array('Form', 'Html', 'App');
	
	public function admin_index(){
		$this -> layout ="/admin/default" ;
	}
 }