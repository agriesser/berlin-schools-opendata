<?php
App::uses('AppModel', 'Model');
/**
 * Specialactivity Model
 *
 * @property School $School
 */
class Specialactivity extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'name';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasAndBelongsToMany associations
 *
 * @var array
 */
	public $hasAndBelongsToMany = array(
		'School' => array(
			'className' => 'Schoolbranch',
			'joinTable' => 'schools_specialactivities',
			'foreignKey' => 'specialactivity_id',
			'associationForeignKey' => 'schoolbranch_id',
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
