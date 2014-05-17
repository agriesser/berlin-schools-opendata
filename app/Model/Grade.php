<?php
App::uses('AppModel', 'Model');
/**
 * Grade Model
 *
 * @property School $School
 */
class Grade extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'grade';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasAndBelongsToMany associations
 *
 * @var array
 */
	public $hasAndBelongsToMany = array(
		'School' => array(
			'className' => 'School',
			'joinTable' => 'schools_grades',
			'foreignKey' => 'grade_id',
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
