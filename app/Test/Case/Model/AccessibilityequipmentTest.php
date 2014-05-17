<?php
App::uses('Accessibilityequipment', 'Model');

/**
 * Accessibilityequipment Test Case
 *
 */
class AccessibilityequipmentTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.accessibilityequipment',
		'app.school',
		'app.schools_accessibilityequipment'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Accessibilityequipment = ClassRegistry::init('Accessibilityequipment');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Accessibilityequipment);

		parent::tearDown();
	}

}
