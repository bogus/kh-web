<?php
class BooksController extends AppController {

	var $name = 'Books';
	
	function beforeFilter() {
		parent::beforeFilter();
		//$this->Auth->allow(array('*'));
		$this->Auth->allow(array('index','view', 'userAddBook', 'userListBooks'));
	}
	
	function userListBooks() {
		$user = $this->Session->read('Auth.User');
		if(!$user)
			$this->redirect('/', null, false);
		
		$userId = $user['id'];
		$this->paginate['Book'] = array(
			'conditions' => array('Book.user_id' => $userId),
			'limit' => 10
		);
		
		$this->set('books', $this->paginate('Book'));
		
	}
	
	function userAddBook() {
		$user = $this->Session->read('Auth.User');
		if(!$user)
			$this->redirect('/', null, false);
		
		$userId = $user['id'];
		
		if (!empty($this->data))
		{
			$this->data['Book']['user_id'] = $userId;
			$this->Book->data = Sanitize::clean($this->data);
			if($this->Book->save()){
				$this->Session->setFlash('Your book is saved.');
				$this->redirect('/books/userAddBook');
			} else {
				$this->Session->setFlash('Error in book saving.');
			}
		}	
		
	}
	
	function index() {
		$this->Book->recursive = 0;
		$this->set('books', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid book', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('book', $this->Book->read(null, $id));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid book', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Book->save($this->data)) {
				$this->Session->setFlash(__('The book has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The book could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Book->read(null, $id);
		}
		$users = $this->Book->User->find('list');
		$this->set(compact('users'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for book', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Book->delete($id)) {
			$this->Session->setFlash(__('Book deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Book was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
