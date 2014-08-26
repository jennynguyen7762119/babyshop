<?php
App::uses('AppController', 'controller');

class AccountsController extends AppController{
	public $helper = array('Form', 'Html', 'App');
	
	public function admin_index(){
		$this -> layout = "/admin/default";
		// search account action
        if ($this -> request -> is('post')) {
            //get search data
            $search_data = $this->request->data["Accounts"];
            $this->Account->set($search_data);
            //get fields list to validate
           $this -> _search($search_data);
        }
	}
	
	public function admin_add(){
		$this -> layout = "/admin/default";
		if($this -> request -> is('post') == TRUE){
			if(is_uploaded_file($this -> request -> data ['Accounts']['image']['tmp_name'])){
				 $file = $this -> request-> data ['Accounts']['image']; //put the data into a var for easy use
				 $ext=substr(strtolower(strrchr($file['name'], '.')), 1);
				 $arr_ext = array('jpg', 'jpeg', 'gif'); //set allowed extensions
				 //only process if the extension is valid
                 if(in_array($ext, $arr_ext))
                 {
                 	move_uploaded_file($this->data['Accounts']['image']['tmp_name'], WWW_ROOT . 'img/uploads/users/' . $this->data['Accounts']['image']['name']);
                 	//set DB mapping for input values
					$this -> Account ->setDBMapping($this -> request -> data['Accounts']);
					if($this ->Account -> Save()== TRUE){
						//show the update message on the account search screen
						$update_msg = Configure::read(SYS_COM_000.'.AddSuccess');
						$this -> Session -> setFlash($update_msg, 'flash_header', array(), 'header');
						$this -> redirect(array('action' => 'index'));
					}
                 }
				 else{
				 	$error ="File hình ảnh không đúng định dạng";
					 $this -> Session -> setFlash($error, 'flash_bad', array(), 'bad');
					 $this -> redirect(array('action' => 'index'));
				 }
			}
			$error =$this -> Account -> validationErrors;
			$this -> Session -> setFlash($error, 'flash_bad', array(), 'bad');
		}
	}

	private function _search($search_data) {
        $conditions = array();
        //$RowPerPage = Configure::read('Paging.row_per_page');
        // Filter admin_name
        if (isset($search_data['username']) && empty($search_data['username']) == FALSE) {
            $conditions['username LIKE'] = '%'.$search_data['username'].'%';
        }
		// Filter admin_mail
        if (isset($search_data['email']) && empty($search_data['email']) == FALSE) {
            $conditions['email LIKE'] = '%'.$search_data['email'].'%';
        }
        //Limit and Order By
        $this -> paginate = array('limit' => 5, 'order' => array('Id' => 'desc'));
        $result = $this -> paginate("Account", $conditions);
        // if the result is empty, show the error message
        // if (empty($result) == TRUE) {
            // $this -> Session -> setFlash('', 'flash_nodata', array(), 'nodata');
        // }
        // if the result is not empty, display the result list
        $this -> set("search_result", $result);
    }
}
