<?php
class Book extends AppModel {
	var $name = 'Book';
	var $validate = array(
		'user_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
			),
		),
		'name' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'Enter book name',
				'required' => true,
			),
		),
		'author_first_name' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'Enter author\'s first name',
				'required' => true,
			),
		),
		'author_last_name' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'Enter author\'s last name',
				'required' => true,
			),
		)
	);
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $belongsTo = array(
		'User' => array(
			'className' => 'User',
			'foreignKey' => 'user_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
