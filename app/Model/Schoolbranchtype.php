<?php
App::uses('AppModel', 'Model');
/**
 * Schoolbranchtype Model
 *
 * @property Schoolbranch $Schoolbranch
 */
class Schoolbranchtype extends AppModel {
    
    public $actsAs = array('Containable');

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'schoolbranchtype';

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'name';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Schoolbranch' => array(
			'className' => 'Schoolbranch',
			'foreignKey' => 'schoolbranchtype_id',
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

}
