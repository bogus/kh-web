<?php
class City extends AppModel {
	var $name = 'City';
	var $displayField = 'city_name';
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $hasMany = array(
		'County' => array(
			'className' => 'County',
			'foreignKey' => 'city_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);

}
