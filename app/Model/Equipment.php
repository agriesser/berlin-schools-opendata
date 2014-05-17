<?php
App::uses('AppModel', 'Model');
/**
 * Equipment Model
 *
 * @property School $School
 */
class Equipment extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'equipments';

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'id';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasAndBelongsToMany associations
 *
 * @var array
 */
	public $hasAndBelongsToMany = array(
		'School' => array(
			'className' => 'School',
			'joinTable' => 'schools_equipments',
			'foreignKey' => 'equipment_id',
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
