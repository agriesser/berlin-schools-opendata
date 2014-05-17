<?php
App::uses('AppModel', 'Model');
/**
 * Institutionprovider Model
 *
 * @property School $School
 */
class Institutionprovider extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'description';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'School' => array(
			'className' => 'School',
			'foreignKey' => 'institutionprovider_id',
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
