<?php
/**
 * SchoolFixture
 *
 */
class SchoolFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'biginteger', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'bsn' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 10, 'key' => 'unique', 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'meal' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'name' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'phonenumber' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'remarks' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'schoolnumber' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'wwwaddress' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'institutionprovider_id' => array('type' => 'biginteger', 'null' => true, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'address_id' => array('type' => 'biginteger', 'null' => true, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'schooltype_id' => array('type' => 'biginteger', 'null' => true, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'bsn_2' => array('column' => 'bsn', 'unique' => 1),
			'fk_school_provider_id' => array('column' => 'institutionprovider_id', 'unique' => 0),
			'fk_school_address_id' => array('column' => 'address_id', 'unique' => 0),
			'bsn' => array('column' => 'bsn', 'unique' => 0),
			'schooltype_id' => array('column' => 'schooltype_id', 'unique' => 0)
		),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => '',
			'bsn' => 'Lorem ip',
			'meal' => 'Lorem ipsum dolor sit amet',
			'name' => 'Lorem ipsum dolor sit amet',
			'phonenumber' => 'Lorem ipsum dolor sit amet',
			'remarks' => 'Lorem ipsum dolor sit amet',
			'schoolnumber' => 'Lorem ipsum dolor sit amet',
			'wwwaddress' => 'Lorem ipsum dolor sit amet',
			'institutionprovider_id' => '',
			'address_id' => '',
			'schooltype_id' => ''
		),
	);

}
