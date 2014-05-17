<?php
App::uses('Schoolbranch', 'Model');

/**
 * Schoolbranch Test Case
 *
 */
class SchoolbranchTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.schoolbranch',
		'app.school',
		'app.schooltype',
		'app.advancedclass',
		'app.advancedclasses_schoolbranch',
		'app.foreignlanguage',
		'app.foreignlanguages_schoolbranch',
		'app.schools_foreignlanguage',
		'app.projectgroup',
		'app.projectgroups_schoolbranch',
		'app.specialactivity',
		'app.schoolbranches_specialactivity'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Schoolbranch = ClassRegistry::init('Schoolbranch');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Schoolbranch);

		parent::tearDown();
	}

}
