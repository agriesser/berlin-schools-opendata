<?php
App::uses('Projectgroup', 'Model');

/**
 * Projectgroup Test Case
 *
 */
class ProjectgroupTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.projectgroup',
		'app.schoolbranch',
		'app.projectgroups_schoolbranch'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Projectgroup = ClassRegistry::init('Projectgroup');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Projectgroup);

		parent::tearDown();
	}

}
