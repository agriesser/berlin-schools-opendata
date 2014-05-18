<?php
App::uses('AppModel', 'Model');
/**
 * Foreignlanguage Model
 *
 * @property Schoolbranch $Schoolbranch
 * @property School $School
 */
class Foreignlanguage extends AppModel {

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
		'Schoolbranch' => array(
			'className' => 'Schoolbranch',
			'joinTable' => 'foreignlanguages_schoolbranches',
			'foreignKey' => 'foreignlanguage_id',
			'associationForeignKey' => 'schoolbranch_id',
			'unique' => 'keepExisting',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
		),
		'School' => array(
			'className' => 'School',
			'joinTable' => 'schools_foreignlanguages',
			'foreignKey' => 'foreignlanguage_id',
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
