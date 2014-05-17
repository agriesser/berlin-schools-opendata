<?php
App::uses('Foreignlanguage', 'Model');

/**
 * Foreignlanguage Test Case
 *
 */
class ForeignlanguageTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.foreignlanguage',
		'app.schoolbranch',
		'app.foreignlanguages_schoolbranch',
		'app.school',
		'app.schools_foreignlanguage'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Foreignlanguage = ClassRegistry::init('Foreignlanguage');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Foreignlanguage);

		parent::tearDown();
	}

}
