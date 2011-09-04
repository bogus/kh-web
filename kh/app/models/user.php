<?php
class User extends AppModel {
	var $name = 'User';

	var $actsAs = array('Acl' => array('type' => 'requester'));

	function parentNode() {
		if (!$this->id && empty($this->data)) {
			return null;
		}
		if (isset($this->data['User']['group_id'])) {
			$groupId = $this->data['User']['group_id'];
		} else {
			$groupId = $this->field('group_id');
		}
		if (!$groupId) {
			return null;
		} else {
			return array('Group' => array('id' => $groupId));
		}
	}


	var $validate = array(	
		'username' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'Enter a username',
			),
			'minlength' => array (
				'rule' => array('minLength', '5'),
				'message' => 'Minimum username length is 5 characters',
			),
		),
		'password' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'Password can not be empty',
			),
			'minlength' => array (
				'rule' => array('minLength', '6'),
				'message' => 'Minimum password length is 6 characters',
			),
		),
		'group_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
			),
		),
		'email' => array(
			'notempty' => array(
				'rule' => array('email'),
				'message' => 'Enter a valid e-mail address',
			),
			'minlength' => array (
				'rule' => array('minLength', '3'),
				'message' => 'Minimum first name length is 3 characters',
			),
		),
		'first_name' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'Enter your name',
			),
			'minlength' => array (
				'rule' => array('minLength', '3'),
				'message' => 'Minimum first name length is 3 characters',
			),
		),
		'last_name' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'Enter your surname',
			),
			'minlength' => array (
				'rule' => array('minLength', '3'),
				'message' => 'Minimum last name length is 3 characters',
			),
		),
	);
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $belongsTo = array(
		'Group' => array(
			'className' => 'Group',
			'foreignKey' => 'group_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
			)
			);

	var $hasMany = array(
		'Post' => array(
			'className' => 'Post',
			'foreignKey' => 'user_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
			),
		'Book' => array(
			'className' => 'Book',
			'foreignKey' => 'user_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
			), 
		);

}
