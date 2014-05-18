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
		'app.schoolbranchtype',
		'app.advancedclass',
		'app.advancedclasses_schoolbranch',
		'app.foreignlanguage',
		'app.foreignlanguages_schoolbranch',
		'app.projectgroup',
		'app.projectgroups_schoolbranch',
		'app.grade',
		'app.schoolbranches_grade'
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
