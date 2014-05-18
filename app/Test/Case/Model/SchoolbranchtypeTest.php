<?php
App::uses('Schoolbranchtype', 'Model');

/**
 * Schoolbranchtype Test Case
 *
 */
class SchoolbranchtypeTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.schoolbranchtype',
		'app.schoolbranch'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Schoolbranchtype = ClassRegistry::init('Schoolbranchtype');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Schoolbranchtype);

		parent::tearDown();
	}

}
