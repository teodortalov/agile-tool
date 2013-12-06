<?php
App::uses('StoriesUser', 'Model');

/**
 * StoriesUser Test Case
 *
 */
class StoriesUserTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.stories_user',
		'app.story',
		'app.project',
		'app.user',
		'app.projects_user'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->StoriesUser = ClassRegistry::init('StoriesUser');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->StoriesUser);

		parent::tearDown();
	}

}
