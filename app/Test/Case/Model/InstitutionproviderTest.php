<?php
App::uses('Institutionprovider', 'Model');

/**
 * Institutionprovider Test Case
 *
 */
class InstitutionproviderTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.institutionprovider',
		'app.school'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Institutionprovider = ClassRegistry::init('Institutionprovider');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Institutionprovider);

		parent::tearDown();
	}

}
