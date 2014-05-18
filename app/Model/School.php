<?php
App::uses('AppModel', 'Model');
/**
 * School Model
 *
 * @property Institutionprovider $Institutionprovider
 * @property Address $Address
 * @property Schooltype $Schooltype
 * @property Schoolbranch $Schoolbranch
 * @property Accessibilityequipment $Accessibilityequipment
 * @property Equipment $Equipment
 * @property Foreignlanguage $Foreignlanguage
 * @property Specialactivity $Specialactivity
 * @property Staff $Staff
 * @property Subject $Subject
 */
class School extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'name';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Institutionprovider' => array(
			'className' => 'Institutionprovider',
			'foreignKey' => 'institutionprovider_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Address' => array(
			'className' => 'Address',
			'foreignKey' => 'address_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Schooltype' => array(
			'className' => 'Schooltype',
			'foreignKey' => 'schooltype_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Schoolbranch' => array(
			'className' => 'Schoolbranch',
			'foreignKey' => 'school_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);


/**
 * hasAndBelongsToMany associations
 *
 * @var array
 */
	public $hasAndBelongsToMany = array(
		'Accessibilityequipment' => array(
			'className' => 'Accessibilityequipment',
			'joinTable' => 'schools_accessibilityequipments',
			'foreignKey' => 'school_id',
			'associationForeignKey' => 'accessibilityequipment_id',
			'unique' => 'keepExisting',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
		),
		'Equipment' => array(
			'className' => 'Equipment',
			'joinTable' => 'schools_equipments',
			'foreignKey' => 'school_id',
			'associationForeignKey' => 'equipment_id',
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
			'joinTable' => 'schools_foreignlanguages',
			'foreignKey' => 'school_id',
			'associationForeignKey' => 'foreignlanguage_id',
			'unique' => 'keepExisting',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
		),
		'Staff' => array(
			'className' => 'Staff',
			'joinTable' => 'schools_staffs',
			'foreignKey' => 'school_id',
			'associationForeignKey' => 'staff_id',
			'unique' => 'keepExisting',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
		),
		'Subject' => array(
			'className' => 'Subject',
			'joinTable' => 'schools_subjects',
			'foreignKey' => 'school_id',
			'associationForeignKey' => 'subject_id',
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
