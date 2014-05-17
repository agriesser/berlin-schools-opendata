<?php
App::uses('AppModel', 'Model');
/**
 * Projectgroup Model
 *
 * @property Schoolbranch $Schoolbranch
 */
class Projectgroup extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'description';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasAndBelongsToMany associations
 *
 * @var array
 */
	public $hasAndBelongsToMany = array(
		'Schoolbranch' => array(
			'className' => 'Schoolbranch',
			'joinTable' => 'projectgroups_schoolbranches',
			'foreignKey' => 'projectgroup_id',
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
