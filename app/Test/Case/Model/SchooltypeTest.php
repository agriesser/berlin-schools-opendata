<?php
App::uses('Schooltype', 'Model');

/**
 * Schooltype Test Case
 *
 */
class SchooltypeTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.schooltype',
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
		'app.advancedclass',
		'app.advancedclasses_schoolbranch',
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
		$this->Schooltype = ClassRegistry::init('Schooltype');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Schooltype);

		parent::tearDown();
	}

}
