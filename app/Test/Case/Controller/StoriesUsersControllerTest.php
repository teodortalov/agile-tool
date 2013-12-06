<?php
App::uses('StoriesUsersController', 'Controller');

/**
 * StoriesUsersController Test Case
 *
 */
class StoriesUsersControllerTest extends ControllerTestCase {

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

}
