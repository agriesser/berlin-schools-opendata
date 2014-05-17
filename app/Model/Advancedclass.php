<?php
App::uses('AppModel', 'Model');
/**
 * Advancedclass Model
 *
 * @property Schoolbranch $Schoolbranch
 */
class Advancedclass extends AppModel {

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
			'joinTable' => 'advancedclasses_schoolbranches',
			'foreignKey' => 'advancedclass_id',
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
