<?php
App::uses('Foreignlanguage', 'Model');

/**
 * Foreignlanguage Test Case
 *
 */
class ForeignlanguageTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.foreignlanguage',
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
		$this->Foreignlanguage = ClassRegistry::init('Foreignlanguage');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Foreignlanguage);

		parent::tearDown();
	}

}
