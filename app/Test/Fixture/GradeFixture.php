<?php
/**
 * GradeFixture
 *
 */
class GradeFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'biginteger', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'boys' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'boysforeignnativelanguage' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'girls' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'girlsforeignnativelanguage' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'grade' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
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
			'boys' => 1,
			'boysforeignnativelanguage' => 1,
			'girls' => 1,
			'girlsforeignnativelanguage' => 1,
			'grade' => 1
		),
	);

}
