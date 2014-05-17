<?php
App::uses('Staff', 'Model');

/**
 * Staff Test Case
 *
 */
class StaffTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.staff',
		'app.jobtitle',
		'app.school',
		'app.institutionprovider',
		'app.address',
		'app.district',
		'app.schoolbranch',
		'app.schooltype',
		'app.advancedclass',
		'app.advancedclasses_schoolbranch',
		'app.foreignlanguage',
		'app.foreignlanguages_schoolbranch',
		'app.schools_foreignlanguage',
		'app.projectgroup',
		'app.projectgroups_schoolbranch',
		'app.specialactivity',
		'app.schoolbranches_specialactivity',
		'app.accessibilityequipment',
		'app.schools_accessibilityequipment',
		'app.equipment',
		'app.schools_equipment',
		'app.grade',
		'app.schools_grade',
		'app.schools_staff',
		'app.subject',
		'app.schools_subject'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Staff = ClassRegistry::init('Staff');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Staff);

		parent::tearDown();
	}

}
