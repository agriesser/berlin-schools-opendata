<?php
App::uses('AppModel', 'Model');
/**
 * Staff Model
 *
 * @property Jobtitle $Jobtitle
 * @property School $School
 */
class Staff extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'jobtitle_id';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Jobtitle' => array(
			'className' => 'Jobtitle',
			'foreignKey' => 'jobtitle_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

/**
 * hasAndBelongsToMany associations
 *
 * @var array
 */
	public $hasAndBelongsToMany = array(
		'School' => array(
			'className' => 'School',
			'joinTable' => 'schools_staffs',
			'foreignKey' => 'staff_id',
			'associationForeignKey' => 'school_id',
			'unique' => 'keepExisting',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
		)
	);

}
