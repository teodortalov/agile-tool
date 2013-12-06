<?php
App::uses('ProjectsUser', 'Model');

/**
 * ProjectsUser Test Case
 *
 */
class ProjectsUserTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.projects_user',
		'app.project',
		'app.user',
		'app.story'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->ProjectsUser = ClassRegistry::init('ProjectsUser');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ProjectsUser);

		parent::tearDown();
	}

}
