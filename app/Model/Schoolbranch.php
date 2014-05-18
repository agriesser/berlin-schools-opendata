<?php
App::uses('AppModel', 'Model');
/**
 * Schoolbranch Model
 *
 * @property School $School
 * @property Schoolbranchtype $Schoolbranchtype
 * @property Advancedclass $Advancedclass
 * @property Foreignlanguage $Foreignlanguage
 * @property Projectgroup $Projectgroup
 * @property Grade $Grade
 */
class Schoolbranch extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'id';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'School' => array(
			'className' => 'School',
			'foreignKey' => 'school_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Schoolbranchtype' => array(
			'className' => 'Schoolbranchtype',
			'foreignKey' => 'schoolbranchtype_id',
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
		'Advancedclass' => array(
			'className' => 'Advancedclass',
			'joinTable' => 'advancedclasses_schoolbranches',
			'foreignKey' => 'schoolbranch_id',
			'associationForeignKey' => 'advancedclass_id',
			'unique' => 'keepExisting',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
		),
		'Foreignlanguage' => array(
			'className' => 'Foreignlanguage',
			'joinTable' => 'foreignlanguages_schoolbranches',
			'foreignKey' => 'schoolbranch_id',
			'associationForeignKey' => 'foreignlanguage_id',
			'unique' => 'keepExisting',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
		),
		'Projectgroup' => array(
			'className' => 'Projectgroup',
			'joinTable' => 'projectgroups_schoolbranches',
			'foreignKey' => 'schoolbranch_id',
			'associationForeignKey' => 'projectgroup_id',
			'unique' => 'keepExisting',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
		),
		'Grade' => array(
			'className' => 'Grade',
			'joinTable' => 'schoolbranches_grades',
			'foreignKey' => 'schoolbranch_id',
			'associationForeignKey' => 'grade_id',
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
