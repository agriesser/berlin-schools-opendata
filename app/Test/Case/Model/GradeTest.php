<?php
App::uses('Grade', 'Model');

/**
 * Grade Test Case
 *
 */
class GradeTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.grade',
		'app.schoolbranch',
		'app.school',
		'app.institutionprovider',
		'app.address',
		'app.district',
		'app.schooltype',
		'app.accessibilityequipment',
		'app.schools_accessibilityequipment',
		'app.equipment',
		'app.schools_equipment',
		'app.foreignlanguage',
		'app.foreignlanguages_schoolbranch',
		'app.schools_foreignlanguage',
		'app.specialactivity',
		'app.schools_specialactivity',
		'app.staff',
		'app.jobtitle',
		'app.schools_staff',
		'app.subject',
		'app.schools_subject',
		'app.schoolbranchtype',
		'app.advancedclass',
		'app.advancedclasses_schoolbranch',
		'app.projectgroup',
		'app.projectgroups_schoolbranch',
		'app.schoolbranches_grade'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Grade = ClassRegistry::init('Grade');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Grade);

		parent::tearDown();
	}

}
