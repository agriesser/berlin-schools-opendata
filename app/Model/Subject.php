<?php
App::uses('AppModel', 'Model');
/**
 * Subject Model
 *
 * @property School $School
 */
class Subject extends AppModel {

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
			'className' => 'School',
			'joinTable' => 'schools_subjects',
			'foreignKey' => 'subject_id',
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
