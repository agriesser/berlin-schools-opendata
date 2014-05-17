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
		'app.schoolbranch',
		'app.school',
		'app.institutionprovider',
		'app.address',
		'app.district',
		'app.accessibilityequipment',
		'app.schools_accessibilityequipment',
		'app.equipment',
		'app.schools_equipment',
		'app.foreignlanguage',
		'app.foreignlanguages_schoolbranch',
		'app.schools_foreignlanguage',
		'app.grade',
		'app.schools_grade',
		'app.staff',
		'app.schools_staff',
		'app.subject',
		'app.schools_subject',
		'app.schooltype',
		'app.advancedclass',
		'app.advancedclasses_schoolbranch',
		'app.projectgroup',
		'app.projectgroups_schoolbranch',
		'app.schoolbranches_specialactivity'
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
