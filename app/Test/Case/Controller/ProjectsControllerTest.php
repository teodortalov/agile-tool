<?php
App::uses('ProjectsController', 'Controller');

/**
 * ProjectsController Test Case
 *
 */
class ProjectsControllerTest extends ControllerTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.project',
		'app.user',
		'app.projects_user',
		'app.story',
		'app.stories_user'
	);

}
