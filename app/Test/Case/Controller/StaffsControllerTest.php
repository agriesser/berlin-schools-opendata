<?php
App::uses('StaffsController', 'Controller');

/**
 * StaffsController Test Case
 *
 */
class StaffsControllerTest extends ControllerTestCase {

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

}
