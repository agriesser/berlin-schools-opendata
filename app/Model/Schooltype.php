<?php
App::uses('AppModel', 'Model');
/**
 * Schooltype Model
 *
 * @property Schoolbranch $Schoolbranch
 */
class Schooltype extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'name';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Schoolbranch' => array(
			'className' => 'Schoolbranch',
			'foreignKey' => 'schooltype_id',
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
