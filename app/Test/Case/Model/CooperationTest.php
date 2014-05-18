<?php
App::uses('Cooperation', 'Model');

/**
 * Cooperation Test Case
 *
 */
class CooperationTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.cooperation',
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
		$this->Cooperation = ClassRegistry::init('Cooperation');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Cooperation);

		parent::tearDown();
	}

}
