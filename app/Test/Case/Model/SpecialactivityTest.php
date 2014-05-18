<?php
App::uses('Specialactivity', 'Model');

/**
 * Specialactivity Test Case
 *
 */
class SpecialactivityTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.specialactivity',
		'app.school',
		'app.institutionprovider',
		'app.address',
		'app.district',
		'app.schooltype',
		'app.schoolbranch',
		'app.schoolbranchtype',
		'app.advancedclass',
		'app.advancedclasses_schoolbranch',
		'app.foreignlanguage',
		'app.foreignlanguages_schoolbranch',
		'app.schools_foreignlanguage',
		'app.projectgroup',
		'app.projectgroups_schoolbranch',
		'app.grade',
		'app.schoolbranches_grade',
		'app.accessibilityequipment',
		'app.schools_accessibilityequipment',
		'app.equipment',
		'app.schools_equipment',
		'app.schools_specialactivity',
		'app.staff',
		'app.jobtitle',
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
		$this->Specialactivity = ClassRegistry::init('Specialactivity');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Specialactivity);

		parent::tearDown();
	}

}
