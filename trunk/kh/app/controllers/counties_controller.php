<?php
class CountiesController extends AppController {

	var $name = 'Counties';

	function index() {
		$this->County->recursive = 0;
		$this->set('counties', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid county', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('county', $this->County->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->County->create();
			if ($this->County->save($this->data)) {
				$this->Session->setFlash(__('The county has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The county could not be saved. Please, try again.', true));
			}
		}
		$cities = $this->County->City->find('list');
		$this->set(compact('cities'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid county', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->County->save($this->data)) {
				$this->Session->setFlash(__('The county has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The county could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->County->read(null, $id);
		}
		$cities = $this->County->City->find('list');
		$this->set(compact('cities'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for county', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->County->delete($id)) {
			$this->Session->setFlash(__('County deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('County was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
