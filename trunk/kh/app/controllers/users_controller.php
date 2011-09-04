<?php

class UsersController extends AppController {

	var $name = 'Users';

	function login() {
		
		if ($this->Session->read('Auth.User')) {
			$this->Session->setFlash('You are logged in!');
			$this->redirect('/', null, false);
		}
	}

	function logout() {
		$this->Session->setFlash('Good-Bye');
		$this->redirect($this->Auth->logout());
		//$this->redirect('/', null, false);
	}

	function beforeFilter() {
		parent::beforeFilter();
		//$this->Auth->allow(array('*'));
		$this->Auth->allow(array('register','thanks','login', 'logout', 'myprofile', 'view', 'edit'));
	}
	/*
	 function initDB() {
		$group =& $this->User->Group;
		//Allow admins to everything
		$group->id = 1;
		$this->Acl->allow($group, 'controllers');

		//allow managers to posts and widgets
		$group->id = 2;
		$this->Acl->deny($group, 'controllers');
		$this->Acl->allow($group, 'controllers/Posts');
		$this->Acl->allow($group, 'controllers/Widgets');
		$this->Acl->allow($group, 'controllers/Users/logout');

		//allow users to only add and edit on posts and widgets
		$group->id = 3;
		$this->Acl->deny($group, 'controllers');
		$this->Acl->allow($group, 'controllers/Posts/add');
		$this->Acl->allow($group, 'controllers/Posts/edit');
		$this->Acl->allow($group, 'controllers/Widgets/add');
		$this->Acl->allow($group, 'controllers/Widgets/edit');
		$this->Acl->allow($group, 'controllers/Users/logout');
		//we add an exit to avoid an ugly "missing views" error message
		echo "all done";
		exit;
		}
	*/
	
	function myprofile() {
		if($this->Session->read('Auth.User')) {
			$user = $this->Session->read('Auth.User');
			$this->redirect('/users/view/'.$user['id']);
		}
	}
	
	function register()
	{
		// If the user submitted the formÉ
		if (!empty($this->data))
		{
			// Turn the supplied password into the correct Hash.
			// and move into the ÔpasswordÕ field so it will get saved.
			//$this->data['User']['password']= $this->Auth->password($this->data['User']['password']);
			$this->data['User']['group_id'] = 3;
			// Always Sanitize any data from users!
			$this->User->data = Sanitize::clean($this->data);
			if ($this->User->save())
			{
				// Use a private method to send a confirmation
				// email to the new user (code not shown)
				//$this->__sendConfirmationEmail();

				// Success! Redirect to a thanks page.
				$this->redirect('/users/thanks');
			}

			// The plain text password supplied has been hashed into the ÔpasswordÕ field so
			// should now be nulled so it doesnÕt get render in the HTML if the save() fails
			$this->data['User']['password'] = null;
		}
	}
        
	function thanks() {

	}

	function index() {
		$this->User->recursive = 0;
		$this->set('users', $this->paginate());
	}

	function view($id = null) {
		$user = $this->Session->read('Auth.User');
		if(!$user)
			$this->redirect('/', null, false);
		
		$userId = $user['id'];
		
		if (!$id) {
			$this->Session->setFlash(__('Invalid user', true));
			$this->redirect(array('controller' => 'books', 'action' => 'index'));
		}
		$this->set('user', $this->User->read(null, $id));
	}

	function edit($id = null) {
		$user = $this->Session->read('Auth.User');
		if(!$user)
			$this->redirect('/', null, false);
		
		$userId = $user['id'];
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid user', true));
			$this->redirect(array('controller' => 'books', 'action' => 'index'));
		}
		if ($userId != $id) {
			$this->Session->setFlash(__('Invalid user', true));
			$this->redirect(array('controller' => 'books', 'action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->User->save($this->data)) {
				$this->Session->setFlash(__('The user has been saved', true));
				$this->redirect(array('controller' => 'books', 'action' => 'index'));
			} else {
				$this->Session->setFlash(__('The user could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->User->read(null, $id);
		}
		$groups = $this->User->Group->find('list');
		$this->set(compact('groups'));
	}
}
