<?php
/**
 * Application level Controller
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

App::uses('Controller', 'Controller');

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package		app.Controller
 * @link		http://book.cakephp.org/2.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller {
	public $component = array('Session', 'RequestHandler');
	var $persistModel = true;

	/**
    * Used to define secure actions
    */
	protected $secureActions = array(
        ''
    );
	
	/**
    * This function will be called before any custom controller will be called
    */
	public function beforeFilter(){
		//redirect to top page in case of only input http://{url}/
		if(empty($this->params ['controller']) == TRUE){
			$this->redirect(array('controller' => 'home', 'action' => 'index'));
		}
		//redirect to top page in case of only input http://{url}/admin/
		
		if($this->params ['controller'] == 'admin'){
			$this->redirect(array('controller' => 'admin/users', 'action' => 'index'));
		}
		// if admin url requested, check the existing of session
		elseif((isset($this->params ['admin']) == TRUE) && ($this->params ['controller']) != 'users'){
			// check user is logged in
			if(!$this->Session->check(SYS_LOG_000)){
				//if not, redirect to login page
				$url = Router::url(NULL, true);// get all url
				if(!preg_match('/login|logout/i', $url)){
					$this->Session->write('lastUrl',$url);
				}
				$this->Session->setFlash(array(Configure::read(SYS_LOG_000.'.SessionTimeout')),'flash_session', array(),'bad');
				$this->redirect(array('controller' => 'users', 'action' => 'index'));
			}
			//if user has logged in
			//$this->redirect(array('controller' => 'users', 'action' => 'default'));
			$this->layout='/admin/default';
		}
		
       	//$this->requireNonSSL('');
	}
	/**
    * This function will force action to Non-SSL
    */
    public function requireNonSSL(){
        $requireNonSecure = array_map('strtolower', func_get_args());
        if (in_array(strtolower($this->action), $requireNonSecure) || $requireNonSecure == array('*')) {
            if ($this->RequestHandler->isSSL()) {
                $this->redirect('http://' . rtrim(env('SERVER_NAME'), '/') . $this->here);
                return;
            }
        }
    }

}
