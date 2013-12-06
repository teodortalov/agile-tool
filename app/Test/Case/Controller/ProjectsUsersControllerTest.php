<?php
App::uses('ProjectsUsersController', 'Controller');

/**
 * ProjectsUsersController Test Case
 *
 */
class ProjectsUsersControllerTest extends ControllerTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.projects_user',
		'app.project',
		'app.user',
		'app.story',
		'app.stories_user'
	);

}
