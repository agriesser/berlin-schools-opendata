<?php
App::uses('Jobtitle', 'Model');

/**
 * Jobtitle Test Case
 *
 */
class JobtitleTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.jobtitle',
		'app.staff'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Jobtitle = ClassRegistry::init('Jobtitle');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Jobtitle);

		parent::tearDown();
	}

}
