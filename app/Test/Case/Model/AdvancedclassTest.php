<?php
App::uses('Advancedclass', 'Model');

/**
 * Advancedclass Test Case
 *
 */
class AdvancedclassTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.advancedclass',
		'app.schoolbranch',
		'app.advancedclasses_schoolbranch'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Advancedclass = ClassRegistry::init('Advancedclass');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Advancedclass);

		parent::tearDown();
	}

}
