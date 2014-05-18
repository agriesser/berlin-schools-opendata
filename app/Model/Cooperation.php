<?php
App::uses('AppModel', 'Model');
/**
 * Cooperation Model
 *
 * @property Schoolbranch $Schoolbranch
 * @property School $School
 */
class Cooperation extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Schoolbranch' => array(
			'className' => 'Schoolbranch',
			'foreignKey' => 'schoolbranch_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'School' => array(
			'className' => 'School',
			'foreignKey' => 'school_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
