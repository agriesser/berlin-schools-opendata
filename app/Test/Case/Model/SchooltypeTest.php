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
		'app.school',
		'app.institutionprovider',
		'app.address',
		'app.district',
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
		'app.specialactivity',
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
